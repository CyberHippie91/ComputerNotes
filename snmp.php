<?php 
	include 'structure.php';
?>
  <!-----------------------------------END OF NAV BAR-------------------------->

  <!--------------------------------TITLE------------------------------------>
  <div class="container-fluid title">
    <h2 class="">SIMPLE NETWORK MANAGEMENT PROTOCOL</h2>
  </div>

  <!---------------------------------MAIN CONTENT---------------------------------->
  <div class="container-fluid middle-section">
    <div class="container content">
      <p class="content">
          The Simple Network Management Protocol (SNMP) is designed for “collecting information from, and configuring, network devices, such as servers, printers, hubs, switches, and routers on an Internet Protocol (IP) network” (Microsoft, 2003). This protocol, as defined in RFC 1157 and 2578, aids the network administrator and mitigates against time consuming manual tasks. Operated by default on ports 161/162 through the gathering of information and characteristics of an object to which it will structure into a directory. The Management Information Base (MIB) for TCP/IP-based NM is responsible for the gathering and translation of data. The structural methodology is referred to as Structure of Management Information Version 2 (SMIv2) as described by IANA, 2003. Vulnerabilities to this protocol include DDoS attacks, spoofing and data manipulation through the community strings the protocol used for authentication.
      </p>

      <blockquote class="blockquote">
        <p> “ICMP echo requests: Some routers, for example Cisco, can be configured to issue ICMP echo requests through the SNMP agent. If you repeat this numerous times the memory of the router can be filled. This would cause performance problems and an inability to respond to the ICMP echo requests.” (Chatzimisios, 2014)</p>
      </blockquote>

      <p class="content">
        The protocol standards have been updated to SNMPv3 to mitigate the authentication and security issues caused by clear text community strings through the implementation of a shared secret key and the Data Encryption Standard (DES) as described by Stallings in 1998.

        As SNMP is commonly installed as a default and holds valuable data on a system leading to a higher number of attacks and heightened vulnerability. The default setting for SNMP encompassed a public read capability and a private write capability inevitably leading a hacker to access and gain data to manipulate it (default community attacks). DDoS attacks also occur under this category such as SNMP reflection; the transmission of large numbers of SNMP queries with the victims IP address (IP spoofing) to which the high volume of replies will consume and flood all network resources. This can be amplified to receive higher traffic as described by Incapsula. Common programs used by hackers for this type of attack would be WS Ping Pro Pack with exploits SNMP with a user-friendly GUI.
      </p>

    </div>
    </div>
		<!-----------------------------------FOOTER-------------------------->
	
	  <div class="containter-fluid footer">
        <h5>CSD304 Web and Network Management <br> Web Server Management and Monitoring <br> University Center Hastings <br> Lecturer Malcolm Levon</h5>
		</div>
	
	

