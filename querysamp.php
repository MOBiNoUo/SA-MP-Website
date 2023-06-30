<?php 


include("config.php");


$sIPAddr = "$ip";      // Obtain IP from config                                                  
$iPort = $port;   // Obtain Port from config

                                                              
$sPacket = "";   // Empty Packet                                                                
 
$aIPAddr = explode('.', $sIPAddr);                                              
 
$sPacket .= "SAMP";       // Packet Type                                                      
 
$sPacket .= chr($aIPAddr[0]);                                                   
$sPacket .= chr($aIPAddr[1]);                                                   
$sPacket .= chr($aIPAddr[2]);                                                   
$sPacket .= chr($aIPAddr[3]);                                                   
 
$sPacket .= chr($iPort & 0xFF);                                                 
$sPacket .= chr($iPort >> 8 & 0xFF);                                            
 
$sPacket .= 'c';   // c Pocket for Getting players On the Server                                                             
                                                                               
 

$rSocket = fsockopen('udp://'.$sIPAddr, $iPort, $iError, $sError, 2);           
fwrite($rSocket, $sPacket);                                                     
 

$server_output = fread($rSocket, 2048);


$online_players = ord(substr($server_output, 11, 1));

// Echo Number of online players
echo "{$online_players}";

fclose($rSocket);
?>