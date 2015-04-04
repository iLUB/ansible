; <?php exit; ?>
[server]
http_path = "http://127.0.0.1:8080"
absolute_path = "{{ document_root }}"
presetting = ""
timezone = "Europe/Berlin"

[clients]
path = "data"
inifile = "client.ini.php"
datadir = "/{{ ilias_name }}"
default = "{{ default_client }}"
list = "0"

[setup]
pass = "{{ setup_hash }}"

[tools]
convert = "/usr/bin/convert"
zip = "/usr/bin/zip"
unzip = "/usr/bin/unzip"
java = "/usr/bin/java"
htmldoc = "/usr/bin/htmldoc"
ffmpeg = "/usr/bin/ffmpeg"
ghostscript = "/usr/bin/gs"
latex = "http://127.0.0.1:8080/Customizing/global/libs/mimetex.cgi"
vscantype = "none"
scancommand = ""
cleancommand = ""
fop = ""

[log]
path = "{{ log_dir }}"
file = "{{ logfile_name }}"
enabled = "1"
level = "WARNING"

[debian]
data_dir = "/var/opt/ilias"
log = "/var/log/ilias/ilias.log"
convert = "/usr/bin/convert"
zip = "/usr/bin/zip"
unzip = "/usr/bin/unzip"
java = ""
htmldoc = "/usr/bin/htmldoc"
ffmpeg = "/usr/bin/ffmpeg"

[redhat]
data_dir = ""
log = ""
convert = ""
zip = ""
unzip = ""
java = ""
htmldoc = ""

[suse]
data_dir = ""
log = ""
convert = ""
zip = ""
unzip = ""
java = ""
htmldoc = ""

[https]
auto_https_detect_enabled = "0"
auto_https_detect_header_name = ""
auto_https_detect_header_value = ""