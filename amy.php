<?php 
	include 'structure.php';
?>

  <!-----------------------------------END OF NAV BAR-------------------------->

  <!--------------------------------TITLE------------------------------------>
  <div class="container-fluid title">
    <h2 class="">AMY'S EVALUATION</h2>
  </div>

  <!---------------------------------MAIN CONTENT---------------------------------->
  <div class="container-fluid middle-section content">
    		<h3 class="center">Analysis of Development - Port Scanner</h4>
			<p> The simple port scanner was easy to develop due to the large online community, resources and high-level nature of the language. The syntax for python allows for this simplicity by conforming to the continuity of other languages, at the least to an extent that makes it easy to learn. The utilisation of variables, functions and loops resembles a language previous utilised (Javascript) which also aided fast development. 
			
			</p>
			
			<p>
			As with every software implementation, version control is paramount. Whilst the port scanner was in development, it was originally built in python 2.7.15+ however the online support syntax varied, errors were produced (such as the print command not requiring a bracket or double quotations) and the decision was made to use the most up to date version on the server. The script was being tested on both a personal WAMP server (with the python module installed and the httpd.config file was modified to allow for the .py CGI and handling) and the company linode. The WAMP python version is 3.7 whereas the company linode was at 3.6.8. No real notable differences in syntax. (Pranskevichus, 2019)
			</p>
			
			<p>
			Due to issues when configuring the file directory path, the python code had to be manually entered through the console each time iterations or changes were made. However, to save time these changes were made in the PyCharm editor first and then inputted into the CLI. This was highly time consuming and not efficient, however it was good practice for writing python. Indentation is of vital importance when utilising the python language and CLI. 
			
			</p>
			
			<p>
			An attempt was made at outputting the results of the port scanner onto the website however this was unsuccessful on first attempt and due to time constraints had to be abandoned. 
			</p>
			
			<div class="container codesnippet"><br>
			<code>
				<pre>
					
&lt;?php 
	 $command = escapeshellcmd('python3 /scanner.py');
    	 $output = shell_exec($command);
   	 echo $output;
?&gt;


				</pre>
			</code>
		</div>
		
		<h3 class="center">Evaluation and future developments</h4>
			<p>
				The overall process of developing a tool for server security with python was extremely efficient and effective. The port scanner is a vital tool whether you are penetration testing or unethical hacking as it determines the entry point to a network which is always a vulnerability if not properly secured. The learning curve for python is relatively easy, especially with previous server-side and client-side scripting knowledge. Modules such as the socket and its dependants (SOCKET_FAMILY and SOCKET_STREAM) allow for simple integration of protocols and facilities required for the development. 
			</p>
			<p> A future improvement would be to get the advanced port scanner working and output the results into a log and on the website however, running the python shell script via php on the public website may cause security issues. Developing a CMS with php to input the content onto the website would be the next stage in development. This would allow for speed in content manipulation. Further tools to be developed for security would be update patch checks and malware detection however the linode already facilitates these. </p>
		
		
		
	
	
  </div>

	<!-----------------------------------FOOTER-------------------------->
	
	  <div class="containter-fluid footer">
        <h5>CSD304 Web and Network Management <br> Web Server Management and Monitoring <br> University Center Hastings <br> Lecturer Malcolm Levon</h5>
		</div>



