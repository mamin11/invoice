var fs = require('fs'),
    args = require('system').args,
    page = require('webpage').create();

    //read the content - first argument of the arguments pulled from teh system
page.content = fs.read(args[1]); 

page.viewportSize = {
    width: 1024,
    height: 1024
};

//set the paper format
page.paperSize = {
    formart: 'A2',
    orientation: 'portrait',
    margin: '1cm'
};

//delay the execution
windown.setTimeout(function () {
    page.render(args[1]);
    phantom.exit();
}, 1000);