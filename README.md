<h4>XDebug Installation and working process</h4>
<hr>
<h5>Basic Understanding:</h5>
<ul>
    <li style="color: greenyellow">Xdebug communicate with IDE using <strong style="color: rebeccapurple">DBGP</strong> Protocol</li>
    <li>Before Start debug code on IDE, first have to install Xdebug on your web server (Apache or NgenX)</li>
    <li>Our IDE like PHPStorm or VsCode first listen to port number 9000 or 9003, depending on your own configuration</li>
    <li><strong>First IDE send Xdebug session id to web server,  then server response with init packet after that ide send break points and server 
        response with Debug session with DBGP protocol</strong></li>
</ul>
<h5>Installation:</h5>
<ul>
<li>Official Installation guide: <a href="https://xdebug.org/docs/install#windows">link 1</a> <a href="https://xdebug.org/wizard">link 2</a></li>
<li>Use with Wizard for best fit for your machine</li>
<li>In your Terminal write <strong style="color: red">php -i</strong> you will get info copy all and paster to wizard box from link 2 above</li>
<li>Wizard will analyze your php info and give you a proper instruction to enable xdebug on your machine.</li>
</ul>
<h5>Use in PhpStorm</h5>
<ul>
<li>First you have to configure xDebug in phpStorm</li>
<li>To do so, goto setting and click on php and then add <storng style="color: red">
[xdebug]
xdebug.mode=debug
xdebug.client_host=127.0.0.1</storng> on php.ini at the bottom of file</li>
<li>Install xdebug helper extension on your chrome browser
</li>
<li>Enable the extension</li>
<li>From phpstorm click on Run from top menu and click Break the first line
in php script</li>
<li>Make enable listener by click on call icon refresh the browser go
back to storm and allow.</li>
</ul>
