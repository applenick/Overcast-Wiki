﻿<?php
  include("includes/functions.php");
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Overcast Network Wiki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="highlight.css" rel="stylesheet" media="screen">
    <link href="assets/ico/favicon.ico" rel="icon">
  </head>
  <body>
    <?php
      pageHeader("Gamemodes");
      ?>
    <div class = "container">
      <div class ="jumbotron">
        <h1>Gamemodes</h1>
        <p>The different types of games you can find on Overcast Network. (Written by PhoenixMatt and Troyter) </p>
      </div>
    </div>
    <div class = "tabs">
      <div class = "container">
        <div class="tabbable tabs-left">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Capture the Wool</a></li>
            <li><a href="#tab2" data-toggle="tab">Destroy the Monument</a></li>
            <li><a href="#tab3" data-toggle="tab">Destroy the Core</a></li>
            <li><a href="#tab4" data-toggle="tab">Team Death Match</a></li>
            <li><a href="#tab5" data-toggle="tab">Blitz</a></li>
            <li><a href="#tab6" data-toggle="tab">Rage</a></li>
            <li><a href="#tab7" data-toggle="tab">King Of the Hill</a></li>
            <li><a href="#tab8" data-toggle="tab">Ghost Squadron</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <h2>Capture the Wool (CTW)</h2>
              <hr>
              <p>The objective of these maps is to go to the other team's side, and get the wool in their wool rooms, which are filled with special items so you can escape, and run back to your side to place the wool. Every CTW map in rotations (maps that are being played in public) are 2 wool or 3 wool maps. You must defend your side's wool rooms and at the same time capture the other team's wool. I find it more difficult than any other gamemode. You can join mid-game and there is <i>not</i> a time limit.</p>
            </div>
            <div class="tab-pane" id="tab2">
              <h2>Destroy the Monument (DTM)</h2>
              <hr>
              <p>Aim: The aim is to defend one's own monument/s and at the same time break/destroy the enemy teams monument/s.</p>
              <p>Objective: The objective of this gamemode is to reach the enemy's side and go to their monument/s and break it. </p>
              <p>Maps: Most DTM maps consist of two monuments that are out of a few obsidian blocks. These obsidian blocks must be destroyed to win. Some maps in rotation, such as Corrupted Kingdoms consist of three monuments and a few such as Soviet Mills consist of one monument. Note that not every monument is limited to being out of obsidian: the monument on Soviet Mills is a big stone brick sphere.</p>
              <p>Positioning: In this gamemode players must choose if they want to be attackers and break the monument, stay back as midfielders at the front lines and keep the enemy attackers back or act as defenders and keep the monument from being broken. This is generally done by exposing the obsidian, placing buttons on the monument, or placing pressure plates underneath the monument.</P>
              <strong>
                <p>Terminology: </p>
              </strong>
              <p>Tunnelers: Players that mine their way until they reach the monument.
              <p> Rushers: Players that rush to the enemys side right at the beginning of the match.</p>
              DTM: Destroy The Monument.</p>
            </div>
            <div class="tab-pane" id="tab3">
              <h2>Destroy the Core (DTC)</h2>
              <hr>
              <p>Aim: The aim is to leak the enemy's obsidian core and keep ones own untouched.</p>
              <p>Objective: The objective is to break the obsidian core and have the lava leak out. 15 minutes into the game, the obsidian material changes to gold, making the breaking of it easier. After 20 minutes the gold core will change into glass.
              <p>
              <p>Maps: Most DTC maps only have one core, though a few have two such as Inheritance, Battle of Tenjin 2 or Total War. </p>
              <p>Positioning: Typically there are three different positions a player can play. The rusher will aim to leak the core and have the lava flow out of it. Midfielders will try and hold no-man's-land for their team and the defenders' aim is to keep their core from leaking at all costs. This is typically done by covering the core with lava, making the leaking of the core a lot harder. </p>
              <strong>
                <p>Terminology: </p>
              </strong>
              <p>Tunnelers: Players that mine their way through the enemy lanes in order to reach the wool room. </p>
              <p>Rushers: Players that rush to the enemy's side right at the beginning of the match.</p>
            </div>
            <div class="tab-pane" id="tab4">
              <h2>Team Death Match (TDM)</h2>
              <hr>
              <p>TDM is basically a gamemode in which you kill people! You are sorted into a team and you spawn with some simple items, then with those items you must get the most points for your team. Some maps (e.g. BlockBlock) have a scorebox, which is where you can optionally go in to score extra points, leading your team to victory. There is a time limit on these maps.</p>
            </div>
            <div class="tab-pane" id="tab5">
              <h2>Blitz</h2>
              <hr>
              <p>Blitz is similar to TDM, except you only get one life, and there are no scoreboxes. You must eliminate the other team before time runs out and you cannot join mid-game. It is <i>not</i> a one-hit kill though, thus you must kill people the old fashioned way.</p>
            </div>
            <div class="tab-pane" id="tab6">
              <h2>Rage</h2>
              <hr>
              <p>Just like Blitz except for one thing: everything is one-hit kill. You have a one-hit kill bow and one-hit kill sword.</p>
            </div>
            <div class="tab-pane" id="tab7">
              <h2>King Of the Hill (KotH)</h2>
              <hr>
              <p>A map almost always consisting of a symmetrical square or other shape where there are two bases.  However, the players are given the required supplies the moment they spawn, so there is no need to provide locations to obtain supplies.  The goal is to control the area designated by the map designer for a set amount of time by standing inside of it and keeping the enemy out. There is no given time limit unless specified. This gamemode stopped being supported in PGM 2.0 update. But then it was re-implemented after the newest administrator, YukonAppleGeek, posted the issue on Github. You may join mid-game. To win, the control point(s) must be held for a certain amount of time, or until the timer reaches zero and the game finishes.</p>
            </div>
            <div class="tab-pane" id="tab8">
              <h2>Ghost Squadron (By SethBling)</h2>
              <hr>
              <p>GS is basically where you spawn with a selected kit and are invisible, trying to kill other invisible people on the other team. It's weird! The main idea behind these maps is to find ways of detecting invisible players and killing them. A big part of these maps is the terrain. Symmetry is not <i>as</i> important as other maps. Do /classes to see a list of classes, and /class (class name here) to change a class. Note that you can only change classes before game, and that you cannot join mid-game and must wait until the next map if you do not join at the start.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
  <div class="container">
    <hr>
  </div>
  <?php
    pageFooter();
    ?>
  </body>
</html>