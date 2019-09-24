<?php 
	include 'structure.php';
?>

  <!-----------------------------------END OF NAV BAR-------------------------->

  <!--------------------------------TITLE------------------------------------>
  <div class="container-fluid title">
    <h2 class="">CONFIGURATION TOOL</h2>
  </div>

  <!---------------------------------MAIN CONTENT---------------------------------->
  <div class="container-fluid middle-section content">
    <h3 class="">Python Web Server Security Monitoring and Configuration Tool</h3>
    <br><br>

    <p class=""> This tool is capable of checking and identifying the ports that are open on the web server. From this information, the server administrator would be able to shutdown these ports if they were not intended to be active. It is best practice to place ports not being used into a vlan named blackhole. <br> If this tool were to be used in an unethical sense, then an attacker may be able to gain access to a network if the tool identified open ports. <br> This tool is written in the programming language Python 3.7.2.</p>
	
	
	<h4 class="">Simple Port Scanner </h4>
		<p> The default versions (checked via putty, CLI command -python and python3) on the linode are: Python 2.7.15+ and Python 3.6.8 <br> 
			In the python editor PyCharm, the initial development of the port scanner includes importing the module socket, subprocess and sys to be capable of using the socket() function and interpreter variables. Once imported, the socket object can be defined with the suitable socket_family and socket_kind. In this instance, the socket_family is AP_INET as we are targeting IPv4 addresses and socket_kind is SOCK_STREAM as the connection is TCP (Python Docs, 2019) <br><br>
			
			The next stage is to prompt the user to input the target IP address for the port scanner. The syntax to define a function is a simple def. To ensure that there are no errors within the function being returned, the try and except methodology is used. With the error mitigation in place, the function can be detailed and executed. When inputted via Putty this works successfully. As a file the command for the path will need to be added (#!/[insert your file path here], and the command to run the script in putty will be called via: python3 scanner.py. 
		
		</p>
		
		<div class="container codesnippet"><br>
			<code>
				<pre>
					
#Import data needed
	import socket
	import subprocess
	import sys


#Define Socket_family and socket_kind
	sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

#Ask user for the IP address you wish to check
	target = input('[+] Enter Target IP:')

#Define the scanner
	def scanner(port):

#try and except method to mitigate errors
	try:
		sock.connect((target,port))
		return True
	except:
		return False

 #function to check the port number and whether it is open or closed
	for portNumber in range(1,1025):
		print("Scanning port", portNumber)
		if scanner(portNumber):
			print('[*] Port', portNumber, '/tcp', 'is open')

				</pre>
			</code>
		</div>
		
		<br><br>
		<h4 class="">Advanced Port Scanner </h4>
		<p> 
		To further enhance the port scanner, further exceptions were added to the try and except method to follow the standards in error checking such as key interruption and issues in resolving host. A banner was added to break up the visual style of the CLI interface, the shell was cleared via the subprocess clear shell command and the datetime variables were declared to allow for the calculation of the execution time. This was unsuccessful as it would stop unexpectedly at port 1. Due to time constraints this issue can not be resolved thus will be using the simple port scanner.
		</p>
			
	<div class="container codesnippet"><br>
			<code>
				<pre>
					
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

		# Print a banner with information on which host we are about to scan
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


				</pre>
			</code>
		</div>
	
	<br><br>

	
	
  </div>
  	<!-----------------------------------FOOTER-------------------------->
	
	  <div class="containter-fluid footer">
        <h5>CSD304 Web and Network Management <br> Web Server Management and Monitoring <br> University Center Hastings <br> Lecturer Malcolm Levon</h5>
		</div>
	




