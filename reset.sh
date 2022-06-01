# Ich bestätige administrative Rechte
echo "Martin's Tracking Pixel | Passwort zurücksetzen"
echo "Ich bestätige, dass ich administrativen Zugang zum Server habe (Antworte mit 'ja')"
read aw
if [[ $aw == "ja" ]]
then
# Admin-Rechte erteilt
echo "Gib dein neues Passwort ein:"
else
# keine Admin-Rechte
echo "Falsche Antwort."
exit 0
fi

# Passwort auslesen
read pwd
cd ..
cd pwd
echo $pwd > pwd.txt
cd ..
# Skript erfolgreich ausgeführt!
echo "Dein Passwort ist nun: $pwd"