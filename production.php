<?php 
	include 'structure.php';
?>


    <!-----------------------------------END OF NAV BAR-------------------------->

      <!--------------------------------TITLE------------------------------------>
      <div class="container-fluid title">
        <h2 class="">CSD304 PRODUCTION LOG </h2>
      </div>

    <!---------------------------------MAIN CONTENT---------------------------------->
	
	<table class="table table-responsive">
		<thead class="thead-dark">
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Date</th>
			  <th scope="col">Learning Outcome</th>
			  <th scope="col">Task</th>
			  <th scope="col">Description</th>
			  <th scope="col">Issues/Notes</th>
			  <th scope="col">Server Admin</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>02/04/2019</td>
			  <td>LO2</td>
			  <td>Creating static and dynamic web content</td>
			  <td>Created HTML index page and inserted boostrap cdn reference link and script into html document</td>
			  <td>Php includes could make this process faster i.e. putting the &lt;head&gt; content in include</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">2</th>
			  <td>02/04/2019</td>
			  <td>LO2</td>
			  <td>Creating static and dynamic web content</td>
			  <td>Created index page main content </td>
			  <td>Used bootstrap &lt;row&gt; and &lt;col&gt; for fluid and responsive grid layout for mobile design, used bootstrap &lt;card&gt; for predesigned div and then adjusted visual style slighty in the groupb.css document</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">3</th>
			  <td>03/04/2019</td>
			  <td>LO2</td>
			  <td>Creating static and dynamic web content</td>
			  <td>Created child pages and linked via the nav bar and card button</td>
			  <td>Formatting the content took longer than expected, should have done this via php</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">4</th>
			  <td>04/04/2019</td>
			  <td>LO2</td>
			  <td>Creating static and dynamic web content</td>
			  <td>Added javascript and jquery transitions</td>
			  <td></td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">5</th>
			  <td>04/04/2019</td>
			  <td>LO2</td>
			  <td>Website uploaded to server</td>
			  <td>Via FileZilla. Set up new site connection and root connection with password protection</td>
			  <td></td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">6</th>
			  <td>05/04/2019</td>
			  <td>LO2</td>
			  <td>Testing of website</td>
			  <td>Found in testing log</td>
			  <td>Tested via w3 schools online validator</td>
			  <td>Connor</td>
			</tr>
			<tr>
			  <th scope="row">7</th>
			  <td>05/04/2019</td>
			  <td>LO2</td>
			  <td>Change html to php where possible</td>
			  <td>&lt;head&gt; &lt;nav&gt; &lt;footer&gt; moved to separate php document. All html docs changed to php. Includes in the orignal files added</td>
			  <td>Footer now appears underneath nav bar? Changed footer into its own php page and included at the bottom of the index page but then that caused issues with the fade in animation and content on the page</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">8</th>
			  <td>10/04/2019</td>
			  <td>LO4</td>
			  <td>Connect to ubuntu via Putty</td>
			  <td>Login Successful</td>
			  <td></td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">9</th>
			  <td>10/04/2019</td>
			  <td>LO4</td>
			  <td>Reseach into server config and security tools</td>
			  <td>Secondary Literature review</td>
			  <td>Python is a suitable language due to high level syntax.</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">10</th>
			  <td>10/06/2019</td>
			  <td>LO4</td>
			  <td>Check python version</td>
			  <td>/usr/bin/python -V and /usr/bin/python3 -V</td>
			  <td>Python 2.7.15+/Python 3.6.8 (default on the server)</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">11</th>
			  <td>10/06/2019</td>
			  <td>LO4</td>
			  <td>Create simple port scanner in python</td>
			  <td>Reviewed multiple online sources and tutorials on how to create sockets and the use of for loops in python</td>
			  <td>Basic port scanner created successfully and run via putty. Successful after a few tweaks such as using python3 over python and using corresponding sytnax updates such as print("") over print ''. Shows port 22 is open</td>
			  <td>Amy</td>
			</tr>
			<tr>
			  <th scope="row">12</th>
			  <td>15/06/2019</td>
			  <td>LO4</td>
			  <td>Small updates to try and fix the footer</td>
			  <td>Unsuccessful</td>
			  <td>Moved footer out of php and back into each individual page</td>
			  <td>Amy</td>
			</tr>
		</tbody>
	</table>
	
	
	
	
	
	
	
	<!-----------------------------------FOOTER-------------------------->
	
	  <div class="containter-fluid footer">
        <h5>CSD304 Web and Network Management <br> Web Server Management and Monitoring <br> University Center Hastings <br> Lecturer Malcolm Levon</h5>
		</div>
	