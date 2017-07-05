<?php
    /*
        Create database

        create database superheroes
        insert into `heroes`(HeroName,HeroType)
        values	('Superman','DC'),
                ('Batman','DC'),
                ('Wonder Woman','DC'),
                ('Spiderman','Marvel'),
                ('Hulk','Marvel');
        select * from `heroes`
    */

    $con = mysqli_connect("localhost","root","bautistanas","superheroes");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return false;
    }
?>