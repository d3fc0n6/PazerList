# PazerList

## This repo will be archived. Please see the [BotList](https://github.com/d3fc0n6/BotList) repo for more info
Compilation of [Pazer Antibot software](https://github.com/PazerOP/tf2_bot_detector) users who have sent out their "Attention!" message.

**To make sure you do not still have the old list, ensure you delete your /opt/cathook/data/plist file in order to delete old entries before installing this list.**

**If you are in this list it is because you have sent out an attention message in the past. No you were not falsely added.**


Before PR'ing ensure that your additions are sorted ascending lexicographically

# Install guide
In a terminal run 

```git clone --recursive https://github.com/d3fc0n6/PazerList.git; cd PazerList; cp list.cfg ~/.steam/steam/steamapps/common/Team\ Fortress\ 2/tf/cfg/pazer.cfg;cd ..; rm -rf PazerList```

then edit your tf/cfg/cat_autoexec.cfg (or cat_autoexec_textmode.cfg for bots) and add
```exec pazer``` 
at the end
