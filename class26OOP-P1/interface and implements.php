<?php


interface structureGroup{
    function create();
    function view();
    function update();
    function delete();
    
}
interface structureFunctions{
    function sum();
    function delete();
   
}

class functionDevelop implements structureGroup, structureFunctions{
    function create(){
        return "Hello Created";
    }
    function view(){
        return "Hello Viewed";
    }
    function update(){
        return "Hello Updated";
    }
    function delete(){
        return "Hello Deleted";
    }
    function sum(){
        return "Hello Created";
    }
    function something(){
        return "It's something";
    }
}

$obj =  new functionDevelop();
echo $obj-> delete();
echo $obj-> something();
