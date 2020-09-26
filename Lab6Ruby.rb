#!/usr/bin/ruby -w
puts "Content-type: text/html\n\n"
require 'cgi'
cgi = CGI.new
name = cgi['name']
address = cgi['address']
parse = address.split(" ")
phonenum = cgi['phonenum']
parsed = phonenum.split("-")
newaddress = ""
count = 0
loop do
        if count == parse.length
           break
 else
           newaddress += parse[count].capitalize + " "
           count = count + 1
        end
        end
part1 = "(" + parsed[0] + ")"
part2 = " " + parsed[1]
part3 = "-" + parsed[2]
puts '
<html>
<head>
        <title>Lab 6 Ruby</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                                $("#div1").fadeOut("slow");
                                $("#div2").fadeOut("slow");
                                $("#div3").fadeOut("slow");
                                $("#div1").fadeIn(1000);
                                $("#div2").fadeIn(6000);
                                $("#div3").fadeIn(12000);
                });
        </script>
</head>
<body>
<h1>Your name is: #{name}</h1>
<h1>Your address is: #{newaddress}</h1>
<h1>Your number is:</h1>
<span id="div1" style="font-size:200px; color:red">#{part1}</span>
<span id="div2" style="font-size:200px; color:green">#{part2}</span>
<span id="div3" style="font-size:200px; color:blue">#{part3}</span>
<div>
 <form action="lab6Python.py" method="post">
                <input type="hidden" name="name" value="#{name}">
                <input type="hidden" name="address" value="#{newaddress}">
                <input type="hidden" name="phone1" value="#{part1}">
                <input type="hidden" name="phone2" value="#{part2}">
                <input type="hidden" name="phone3" value="#{part3}">
                <input type="submit" value="Click here for Python">
        </form>
</div>
</body>
</html>'