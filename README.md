# gaap-box
the sacred Jedi texts will no longer be erased from the archive memery

Short-Term Functionality Goals:
<div><strong>TOP PRIORITY: Need to find a free way to host an SQL database online, or any other way to store box entries for all users</strong><br>
<em>One option used before: 000webhost, free tier is kinda limited but should suffice for our purposes (at least initially)</em></div>
<ul>
    <li>create text entries</li>
    <li>retrieve text entries</li>
    <li>use an SQL (or MySQL or NoSQL idk) database to store entries
        <ul>
            <li>Format of SQL Table: </li> 
            <li>Name: EntryTable</li>
            <li><table><th><td>EntryID</td></th><th><td>EntryContent</td></th><th><td>UserID <em>(will be null for now)        </em></td></th></table></li>
        </ul>
    </li>
    <li>sanitize text input</li>
</ul>

Long-Term Features to Add Once Basic Functionality Implemented:
<ul>
    <li>style/formatting of web pages</li>
    <li>users can make multiline text entries</li>
    <li>users can change font/size/color/other aspects of text entries</li>
    <li>users can make picture entries</li>
    <li>users can draw entries</li>
    <li>users can create accounts</li>
    <li>users can browse entries they created</li>
    <li>users can edit/delete entries they created</li>
</ul>
