##### brick hill 2017 set api thing
still needs to be fixed in terms of server side stuff (on site and on the client side - it's all good)

### installing the stuff:
1. put the API and play folders into your 2017 brick hill src (not giving one, because you can find that by yourself)
2. compile the .gm81 files by yourself (gamemaker 8.2 is better than 8.1 but it's your choice)
3. idk have fun with trying to understand why server can't accept client connections

### troubleshooting:
- gamemaker 8.1 thing says that there's "Http Dll 2.3" missing:
1. download the contents from the http dll folder and put it into something like: "windows disc/users/yourusername/appdata/local/gamemaker8.1/extensions" (there could be a .gex extension, but i am too lazy to find it /shrug )
- gamemaker studio cannot compile server/client due to outdated functions: feel free to fix them, if you want to
- something magical happened, your downloads were stolen by aliens: go sleep pls 🙏
- bricks don't load properly (a 2017 workshop unexpected bug): known bug, i guess? you may need to try to yeet the 2017 brick loading and change it into the current legacy one
  
### credits:
brick-luke: the 2017 client/server, the original gaming api (written by himself)<br>
me: changing something, 2017 client now don't want the "var" file anymore (it is now parameter based btw), localhost rerouting, the server and client decompilation
