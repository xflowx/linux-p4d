<?php

// -------------------------
// chaeck login

if (haveLogin())
{
   echo "      <div class=\"menu\" style=\"position: fixed; top=44px;\">\n";
   echo "        <a href=\"basecfg.php\"><button class=\"rounded-border button2\">Allg. Konfiguration</button></a>\n";
   echo "        <a href=\"alertcfg.php\"><button class=\"rounded-border button2\">Sensor Alerts</button></a>\n";
   echo "        <a href=\"settings.php\"><button class=\"rounded-border button2\">Aufzeichnung</button></a>\n";
   echo "        <a href=\"schemacfg.php\"><button class=\"rounded-border button2\">Schema Konfiguration</button></a>\n";
   echo "        <a href=\"hmcfg.php\"><button class=\"rounded-border button2\">HomeMatic</button></a>\n";
   echo "      </div>\n";
   echo "      <div class=\"menu\" style=\"top=44px;\">\n";
   echo "      </div>\n";
}

?>
