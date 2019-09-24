<?php 
	include 'structure.php';
?>

  <!-----------------------------------END OF NAV BAR-------------------------->

  <!--------------------------------TITLE------------------------------------>
  <div class="container-fluid title">
    <h2 class="">EXPLOITS AND ATTACKS </h2>
  </div>

  <!---------------------------------MAIN CONTENT---------------------------------->
  <div class="container-fluid middle-section">
    <div class="container content">
      <p class="content">
        Security attacks to networks are now a regular occurrence in this technological age, however “the ability of an eavesdropper to monitor the network is generally the biggest security problem that administrators face in an enterprise” (TechNet, 2015). Eavesdropping (commonly referred to as Network Snooping or Packet Sniffing) represents data packets being intercepted and deciphered by an unwelcome third party. This can occur for two motives; information gathering and information theft. Commonly executed through attacks such as man in the middle where
      </p>

      <blockquote class="blockquote">
      <p>“someone between you and the person with whom you are communicating is actively monitoring, capturing, and controlling your communication transparently […] The person on the other end might believe it is you because the attacker might be actively replying as you to keep the exchange going and gain more information.” (TechNet, 2015)</p>
      </blockquote>

      <p class="content">
        Another attack that facilitates eavesdropping would be the application layer attack, executed through the attacker aiming code at layer 7 of the OSI model to modify the application and often being undetected. This subterfuge comes from the attack using legitimate HTTP requests through ports 80 and 443. These attacks enable control over the operating system (the ability to read, add and delete); to proliferate the entire network causing further data to be exposed and damaged; to generate abnormalities and disturbances in the running of the application; to open the system up to further attacks; to steal data otherwise protected by the Data Protection Act. Known application layer attacks fall under four categories as described by Bhattacharyya and Kalita in 2013. The first category encompasses HTTP related attacks such as Cross Site Scripting (XSS) where code is injected into web pages, generally through forms, to be read by the browser and implemented.       </p>

      <blockquote class="blockquote">
        <p>
          “Posting messages on a bulletin board is a good example of cross-site scripting. A malicious user completes a form to post a message on a bulletin board. The posting includes some malicious JavaScript code. When an innocent user looks at the bulletin board, the server will send the HTML to be displayed as well as the user’s malicious code. The code will be executed by the client’s browser because it thinks it is valid code from the Web server.” (Tipton, 2001) </p>
      </blockquote>
      <p class="content">
        Another attack under the HTTP umbrella would be Parameter tampering which endeavours to provide access to the back end of a website, such as its database, through the manipulation of the SQL statements provided in the URL. This would be a violation of the Data Protection Act as the attacker would then be able to retrieve confidential data for example, credit card information and personal details. </p>      

      <blockquote class="blockquote">
        <p>“Unprotected Websites are attacked an average of 2,000 times a week, a new study has revealed. Security firm PanSec International and Internet service provider PSINet Europe set up two fake banking sites and monitored the number of times they were attacked over an eight-week period. One site was protected with a standard firewall – the other was left unprotected. The firewall prevented 90 per cent of attacks, but the protected site was still attacked more than 200 times a week. The unprotected site was attacked a total of 19,128 times over the eight-week period – more than once every five minutes” (Grew, 2008) </p>
      </blockquote>

      <p class="content">
        Cookies are another aspect of the web that are vulnerable to incidents. Cookie poisoning is term applied when the data stored by a cookie (id, password, card details, account numbers) is infiltrated and used for the attacker’s own purpose. Damage to a network in this category can also occur through the user unknowingly downloading and spreading a virus (a malicious piece of code that is self-replicating and uses all available resources) or malware. A worm can inflict damage in a similar manner however worms do not need the user interaction to distribute itself. An infamous internet work would be the Code Red Worm and its evolved mutations.
      </p>

      <blockquote class="blockquote">
        <p> “This fast replicating worm known as the ‘Code Red Worm’ took advantage of a flaw in Microsoft Internet Information Server (IIS) to manifest itself. […] an estimate of more than 250,000 systems were infected in just 9 hours.” (Sans, 2013)   </p>
      </blockquote>

      <p class="content">
        Application layer attacks are also used in conjunction with DDOS (Distributed Denial Of Service) attacks. “The intent of these attacks is to consume the network bandwidth and deny service to legitimate users of the victim systems” (Xie and Yu, 2009) such as HTTP flooding. HTTP flooding occurs when the HTTP methods used for testing and development are exploited; using methods such as:
      <ul class="b">
        <li> "HEAD</li>
        <li> GET</li>
        <li>	POST</li>
        <li>PUT</li>
        <li>DELETE</li>
      <li> TRACE</li>
      <li> OPTIONS</li>
      <li> CONNECT" (Bisht, 2015)</li>
      </ul>
      <p class="content">The Nimda worm is another form of attack that manipulates and infiltrates with the same characteristics as the HTTP flooding, using the GET command, although this particular malware can negotiate entry in various ways. This type of worm is known as a directory traversal attacks to which restricted data can be accessed and modified by the hacker. </p>

      <blockquote class="blockquote">
        <p> “It only took 22 minutes from the moment Nimda hit the Internet to reach the top of the list of reported attacks. The Nimda worm's primary targets were Internet servers. While it could infect a home PC, its real purpose was to bring Internet traffic to a crawl.” (Strickland, 2008)   </p>
      </blockquote>

      <p class="content">
        The secondary category for application attacks would be SMTP related attacks; in a similar approach to HTTP flooding, attacks such as SMTP flooding send requests in the form of spam to the mail server in such abundance and excess that all resources of the server are consumed.       </p>

      <blockquote class="blockquote">
        <p> “During the first half of 1997, Langley Air Force Base was attacked repeatedly via the Internet with a wide range of automated Simple Mail Transfer Protocol (SMTP) mail bombs. Most e-mail bombs have one primary objective: flood the e-mail server so that it becomes unavailable or is unserviceable. These e-mail attacks may also be used to forge the identity of the attacker, degrade the availability of communications systems, undermine the integrity of organizations, or covertly distribute illicit material.” (Northcutt, 2014)  </p>
      </blockquote>

      <p class="content">
        Other forms of SMTP attacks would be account enumeration, where commands such as telnet and VRFY executed by the attacker allow for verification of email addresses by the server. Once the attacker has valid email addresses further intrusion and damage can be caused. Other vulnerabilities can be exploited whilst mail is being transported and transferred over fellow mail servers to reach its destination. This is referred to as a relay; when mail severs accept these transmissions with no user authentication needed it is referred to as an open relay.

      <blockquote class="blockquote">
      <p>
        “Once a malicious user finds out about an open relay server on the Internet, he/she can send millions of messages all over the world, potentially bringing your network to its knees. Several organizations have setup databases of IP Addresses that list and track open relay servers. If you have an open relay server you run the risk of having your IP listed in one of these databases. As a result, many SMTP servers may not accept emails from you” (Xeams, 2015)
      </p>
    </blockquote>

      <p class = "content">
        Traversal attacks can also be implemented in this category however instead of gaining access to the directory through a http related incident, they gain access through the firewall (Firewall Traversal Attack).
        The third category houses FTP-related attacks; a particularly vulnerable procedure as FTP transmissions can utilise third party FTP servers to complete their request, known as proxy FTP. This was commonly exploited by hackers as it would provide high levels of stealth and bypass network address based precincts. An infamous attack in this department would be the Bounce attack to which attackers would send PORT requests to an FTP server to gain access for further malicious intent. Nmap port scanner is frequently used in conjunction with the bounce attack as described by Seifried in 2001.
      </p>

      <blockquote class="blockquote">
        <p>
      “To avoid such bounce attacks, it is suggested that servers not open data connections to TCP ports less than 1024.  If a server receives a PORT command containing a TCP port number less than 1024, the suggested response is 504 (defined as "Command not implemented for
      that parameter" by [PR85]).  Note that this still leaves non-well known servers (those running on ports greater than 1023) vulnerable to bounce attacks” (Allman, 1999)
        </p>
      </blockquote>

      <p class = "content">
        With similar characteristics, FTP port injection attacks use commands to implement malicious code. Another form of FTP attack is the Passive Aggressive Script (pasvagg.pl) which provides the hacker with the capability to utilise the open port before the client can connect as well as connecting to higher ports to steal files that are being downloaded from the FTP server. To defend this, the client must rely on the protection mechanisms in place on the server for the data transfers. Other attacks include Bruteforce (which infiltrates through excessive password attempts with random combinations) and Dictionary Attack (which infiltrates through excessive password attempts with words). Programs that will aid the attack attempt include Hydra and Brutus as described by Lotaya (2012) from Hacking Share. This can be mitigated by reducing and limiting the number of attempts one can have at a password.
        TCP hijacking is another common form of attack faced by network administrators at the transport layer of the TCP/IP model, although it is becoming less popular the vulnerability is still present as described by Prohorenko in 2000. Due to the TCP characteristics of reordering sequenced packets on arrival, substitute packets can be implemented by a hacker. This is most commonly associated with FTP and Telnet as these do not validate the IP address of the client, assumptions are made that the packet has been transmitted from the connected client. The hackers input of their own desired IP address in the substituted packet enables the server to reply to the fake IP address hence terminating the connection with the valid client. These sorts of attacks rely on sniffer attacks for their initial assault and reconnaissance.

      </p>

      <p class="content">
        The final category refers to SNMP related attacks, attacks surrounding network management. As SNMP is commonly installed as a default and holds valuable data on a system leading to a higher number of attacks and heightened vulnerability. The default setting for SNMP encompassed a public read capability and a private write capability inevitably leading a hacker to access and gain data to manipulate it (default community attacks). DDoS attacks also occur under this category such as SNMP reflection; the transmission of large numbers of SNMP queries with the victims IP address (IP spoofing) to which the high volume of replies will consume and flood all network resources. This can be amplified to receive higher traffic as described by Incapsula. Common programs used by hackers for this type of attack would be WS Ping Pro Pack with exploits SNMP with a user-friendly GUI.
      </p>


    </div>
  </div>
  
  	<!-----------------------------------FOOTER-------------------------->

	  <div class="containter-fluid footer">
        <h5>CSD304 Web and Network Management <br> Web Server Management and Monitoring <br> University Center Hastings <br> Lecturer Malcolm Levon</h5>
		</div>
	


