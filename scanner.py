#Import data needed
import socket
import subprocess
import sys
from datetime import datetime

# Clear the screen
subprocess.call('clear', shell=True)

#Define Socket_family and socket_kind
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

#Ask user for the IP address you wish to check
target = input('[+] Enter Target IP:')

# Check what time the scan started
t1 = datetime.now()

#Define the scanner
def scanner(port):

  #try and except method to mitigate errors
	try:
		sock.connect((target,port))
		return True
  except KeyboardInterrupt:
    print("You pressed Ctrl+C")
    sys.exit()
  except socket.gaierror:
    print("Hostname could not be resolved. Exiting")
    sys.exit()
  except socket.error:
    print("Couldn't connect to server")
    sys.exit()
#default except always last
  except:
    return False

# Checking the time again
t2 = datetime.now()

# Calculates the difference of time, to see how long it took to run the script
total =  t2 - t1


# Print a nice banner with information on which host we are about to scan
print "-" * 60
print "Please wait, scanning remote host", remoteServerIP
print "-" * 60

  #function to check the port number and whether it is open or closed
for portNumber in range(1,1025):
	print("Scanning port", portNumber)
	if scanner(portNumber):
		print('[*] Port', portNumber, '/tcp', 'is open')

# Printing the information to screen
print 'Scanning Completed in: ', total
