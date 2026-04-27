![](https://www.youtube.com/watch?v=OwBKbuy7U8s)

## Transcript

### Inicio del video

**0:02** · In this video, we're going to make Linux Mint not just look better, but feel more modern and more useful. Even if you're just using your system casually or for coding, editing, or browsing, these tweaks can really level things up. Let me show you something cool. First, I've got a PDF file here. Just right click, compress PDF, and that's it. From 2MB down to just 600 KB in one click. Super useful if you email or share files often. Now check this out. I'm opening this app in full screen and that annoying system title bar gone. Only the app's own menu is there.

**0:41** · Looks way cleaner and feels more like a native app experience. You can also right click any folder and open it directly in VS Code or your favorite IDE. No need to browse around manually.

**0:55** · And if you're into design or writing CSS, this one's super handy. Just pick any color from anywhere on your screen. Like here, I'll grab a color from my wallpaper and drop it straight into Lunacy. Very quick and super useful. Before we dive into all the Linux Mint tweaks, I want to quickly introduce Go Log, especially if you care about privacy or use multiple accounts.

**1:18** · These days, the internet isn't as open or simple as it used to be. Some websites block content based on your location. You're constantly being tracked and managing multiple accounts can get you flagged or banned if you're not careful. That's where Go Login helps. It's an anti-detect browser that gives you full control over how websites see you. You can open any website no matter where you are. Perfect for accessing geo-restricted content. It hides your identity, blocks trackers, and protects your privacy better than a regular browser or VPN.

**1:44** · And the cool part, you can run multiple browser profiles at once, each with its own login, cookies, and fingerprint without logging in and out. So whether you're working, managing socials, or running a business, it keeps everything separate and secure. It even helps with remote teamwork. You can safely share a browser profile with your team. No need to share passwords or sensitive info. And yep, they give you 2 GB of free residential proxies so your connection stays fast, private, and reliable. So, if you manage multiple accounts or just want better privacy and security, Go Login is exactly what you need.

**2:17** · Try the 7-day free trial. No card required. Click the link in the description to get started and grab the best discount. So, first we'll start with theming and appearance. I've added timestamps in the video, so feel free to skip to your favorite part or jump over things you don't need, like changing the system font. We'll start by changing the system font because honestly I'm not a fan of that default Ubuntu style font. I've already shown how to change fonts in one of my earlier videos, but I know some of you are watching for the first time. So here's a quick refresher on how to do it.

### Aviso legal

### Cambio de fuente del sistema

**2:54** · Go to fonts.google.com and download your favorite font. I'm going with the inter font. It looks clean and modern. Once you found your font, go ahead and download it. After downloading, extract the downloaded file. Then inside the extracted folder, copy the TTF font files. Now go to this location and paste them there. \[Music\] Once that's done, search for font selection in the application menu and open it. Here, change the font for default, desktop, and window title.

**3:24** · Now, search for the font you downloaded and apply it to all three options. You can also slightly increase the font size if you want because yeah, Linux Mint does give you pretty tiny fonts by default. Apply the regular version of the font for default and desktop and use the medium or semi-bold version for the window title so it stands out a bit more. After that, don't forget to restart your system. Now, let's download some themes. Head over to gnome-look.org and from the left side, select the GTK themes category.

### Temas (Temas, Iconos, Cursor)

**4:00** · Most themes here are made for Gnome, but many of them also work with Cinnamon. Click on a theme you like. Check if it mentions Cinnamon support. Some popular ones don't mention it, but still work just fine. So, download and test if it works for you. Now, we've got two options to install the theme. Option one is on your screen right now. You can pause and follow it step by step. Option two is much easier. Just click the install button, but it needs a couple of extra tools installed first. So, let's install them. Click the little question mark icon.

**4:35** · You'll find all the instructions there. Click the first link and download the package \[Music\] here.

**4:44** · Click the files option and download the package for Debian since we're using Linux Mint.

**4:54** · Now, go back to the product page and copy the command that mentions Ubuntu 16.04.

**5:03** · Then open your terminal in the downloads folder. Paste the command and hit enter. \[Music\] Now open your browser again and copy the second command to install the downloaded package.

**5:17** · Switch back to the terminal and run ls to check the exact name of your downloaded file. Then paste the command. Add your package name after it and hit enter.

**5:30** · \[Music\] Once you've done those steps, you can install any theme just by clicking the install button. So here I'm going to install this theme called 'Skeuos'. \[Music\] After it's installed, let's apply it. I've opened the files app so we can see the changes instantly.

**5:54** · Now open your application menu. Search for theme and launch it. If you see a window like this, click on advanced settings. Now let's apply our theme for applications. Click on it and find the one you just installed. Here they are. Let's go with the dark version first. This theme doesn't change a whole lot, but those rounded buttons definitely look better than the default ones, at least in my opinion. Now let's check out the light version. So, here's how our light theme looks. Most themes come with both light and dark variants. You can pick the one you like best.

**6:29** · Next, we'll download an icon theme. Because the default Mint icons look a bit outdated, at least in my opinion. Once you're on the website, look over to the left sidebar and click on full icon themes. This will filter out only the complete icon packs. Now, scroll to the top of the page and click on the rating option. This will sort the themes by popularity and quality, making it easier to pick the best one. I'm going with the TA icon theme. It's clean, colorful, and goes really well with most setups. Now, to install it, just click the install button. You can pick any icon theme you like. Doesn't have to be this one. Once it's installed, open your themes app again.

**7:04** · Go to the icons section and apply your newly installed icon theme. You'll see the changes instantly.

**7:21** · After that, we'll install a cursor theme. You can download and install it just like we did with icons and GTK themes. Just select cursors from the category list, and you'll see all the available cursor themes. I'm going with one called Future Cursor. It looks modern and clean. Once it's installed, open your themes app. Click on mouse pointer and apply your new cursor.

**7:44** · After applying it, you can visit this website to test your cursor properly and see how it feels in action. \[Music\] Next, right click on the desktop and select change desktop background and apply your favorite wallpaper. But after changing the wallpaper, you'll notice that the panel and application menu background don't really match. They still have that solid look. So, let's fix that. Search for extensions in the apps menu and open it here. Click on download and search for an extension called blur cinnamon.

### Añadir efectos de desenfoque

**8:17** · Download this blur cinnamon extension and go back to the manage tab. Select blur cinnamon and click the plus button to enable it. You'll now see a nice blur effect behind your bottom panel that blends better with the wallpaper, but the application menu and other applets still have a solid background. So, let's fix that, too.

**8:40** · Click this little icon next to the extension to open blur cinnamon preferences. Now under the general section, enable the toggle that says pop-up menus. \[Music\] Now we've got a nice blur effect, but when you hover over apps in the menu, you'll still see a solid background. Let's fix that, too. Open the themes app and under the desktop section, apply the Fluent dark theme. If you haven't downloaded it yet, go ahead and do that first.

**9:07** · Once applied, you'll notice a nice translucent background when hovering over app items. It blends much better with the blur. Just a heads up though, this is a static blur effect, meaning it doesn't blur things dynamically. It just blurs the wallpaper behind, but it still looks really nice. Next, let's reposition the panel items. First, right click on the panel and enable edit mode. I'm going to move the grouped apps to the center and then add a few more applets.

### Organizar elementos del panel

**9:36** · The first one is workspace switcher and the second is window quick list. Now I'll place them to the right next to the menu button, but of course you can arrange them however you like.

**9:47** · For the workspace switcher, open its preferences and change the display type to simple buttons.

**9:52** · This will show you the number of workspaces you currently have. Once you're done, don't forget to disable edit mode. Now you can easily switch workspaces and see how many are active.

**10:04** · And with the window quick list, you can view all your open windows in one click. Linux Mint doesn't give you any built-in option to change wallpapers based on time of day, but there's a cool extension that lets you do exactly that. Open the extensions app and download Cinnamon Dynamic Wallpaper. Once you enable it, your wallpaper will start changing automatically. And it even comes with lots of beautiful presets. If you open its preferences, you can see which wallpaper is currently applied and at what time each version will switch. You can also choose a different dynamic wallpaper, and each one usually includes different versions for morning, day, evening, and night.

### Configurar fondo de pantalla dinámico

**10:38** · It really makes your desktop feel more alive. And as you can see on screen, they look pretty awesome.

### Animaciones elegantes

**10:52** · If you're someone who likes a bit of fancy animation, here's how you can add some. In the extension manager, you'll find a few extensions that bring cool effects to your system. One of them is called magic lamp effect. It adds a minimizing animation, something like this. Now, it's not as polished as what you see on KDE or Gnome, but it's still fun to try out, but if you enable it, I'd suggest tweaking the animation speed a little just to make it feel smoother and more fluid.

**11:21** · Next is Desktop Cube. It adds a 3D cube animation when switching between workspaces. Looks cool if you like visual effects. And the last one is burn my windows. It gives you animated effects when opening and closing apps. By default, it adds an animation something like this. But if you open its preferences, you'll find tons of extra effects to choose from. And the best part, you can set different animations for opening and closing windows. Here's the one I've selected for now. Now, after enabling this, you might notice a slight delay when launching apps.

**11:52** · That's because some animations take a bit more time. So, to fix that, just go into effect settings, select the animation you applied, and adjust the speed to make it quicker. And if you notice that my wallpaper suddenly changed, that's because of the dynamic wallpaper extension we enabled earlier. And that's it. Now the animations feel much faster and smoother. Now we will enable a 3D style animation for alt tab preview.

**12:23** · For this one you don't need any extra extension. Just open system settings and go to the windows option. Click on alt tab. Here you can change the alt tab switcher style. Try out options like timeline or coverflow and see what feels better to you. I've selected the coverflow style and here's how it looks.

### Herramientas y extensiones inteligentes para optimizar tu flujo de trabajo

**12:49** · Next, we'll look at some extensions and small tools that can speed up your workflow and boost your productivity. For example, if you want a window tiling feature, you can use this extension called G tile. You can also assign your own shortcut key for it. So, when you've got multiple windows open, just press your shortcut and you can quickly arrange them all in one click, just like this. If you're someone who finds Cinnamon's title bar ugly or annoying, especially when apps are in full screen, here's how you can hide it. Just enable an extension called Cinnamon Maximus. Once it's active, whenever you open an app in full screen, the system title bar will disappear, giving a much cleaner look overall. And here's a quick tip.

**13:24** · If you're using this extension, when an app is full screen, the title bar disappears, so you won't see the close, minimize, or unmaximize buttons. But don't worry, you can still restore the window.

**13:40** · Just press and hold Alt, then move your cursor slightly and it'll unmaximize the window back to its previous position. Next, if you often work with colors and need to match them exactly, a color picker can be super handy. Like here, I want to match the background color with this part of my wallpaper, but it's not that easy without the exact color code. But that's where the color picker applet comes in. Right click on the panel, go to applets, and enable the color picker. If it's not already installed, just download it from the download section. Once enabled, you'll see a small icon in your panel.

**14:11** · Now, you can easily pick the color from any part of your screen. So, let's say I need the color from this specific spot. I'll just use the picker and done. The color code is copied. Now, I can just paste it in VS Code or anywhere else I need.

**14:32** · Next, let's talk about actions in Cinnamon. Search for actions in the app menu and launch it.

**14:37** · Then go to the download tab. You'll find lots of useful actions based on your workflow. Like here, I've downloaded a PDF compressor and a VS Code launcher. Just download the ones you want and make sure to enable them from the list. And when you write click on a file or folder, you'll see those actions show up in the context menu. Like here, when I right click on a folder, I get the option to open it directly in VS Code. Similarly, when I right click on a PDF file, it shows me the compressed PDF option and I can compress it in just one click. I also downloaded an image compressor and when I right click on an image, the option shows up. But it doesn't work.

**15:17** · Here's why. If an extension isn't working, just select it and click the little info button. Then click on the more info link. It'll open a web page with all the details about that extension.

**15:27** · Scroll down a bit and you'll see a dependencies section. To make the extension work, you need to install those dependencies on your system. So, let's install them and see what happens. \[Music\] All right, the dependencies are installed. Now, let's test it again. And it's working.

**15:50** · Our image is now compressed and I can send or email it easily.

**15:54** · And if you'd like to right click any file and send it directly to your phone, check out this video where I show you how to install KDE Connect on Linux Mint. And with that, we're done.