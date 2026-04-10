Your Refresh Token

Copy the following code into your Obsidian plugin setting

OGD Sync is a plugin that lets you sync your Obsidian vault to Google Drive. This was created because iOS does not sync with cloud providers well, apart from Obsidian Sync, and the plugins that currently work with Google Drive are paid or part of some larger, more complicated system. Our sync plugin allows you to sync between multiple devices (Windows, MacOS, and iOS tested) through Google Drive and store your vault there. You retain a local copy of the vault on whichever devices you use, and your data never reaches our eyes. It is safely stored on your devices and Google Drive, and our servers only serve as a way to exchange refresh keys for access keys (your data never passes through our servers). Please read the instructions below as well as the **WARNING**!

**Note**: OGD Sync is **not** an official plugin maintained by the Obsidian developers. This is a community-made plugin meant to simply add some functionality. Use this at your own risk, and make sure to back up your vaults! This plugin also syncs the *.obsidian* config folder. Your data is not E2E encrypted.

## Setup (First Time)

OGD Sync communicates with Google Drive using a refresh token. To get this token, sign in on the website (top right), and copy the token this website returns. Then, go into the Obsidian plugin settings and paste the token into the refresh token field. Make sure the vault you're syncing into is empty. Then, reload the Obsidian app.

![Refresh Token](https://ogd.richardxiong.com/token.webp) ![Download](https://ogd.richardxiong.com/download.webp)

## Setup (New Device)

If you already used this plugin on a different device and want to sync the vault onto a new one, then you should manually sync the vault the first time. To do this, just download the vault from Google Drive and open it in Obsidian (make sure the vault name stays the same). All of your plugins, settings, and notes will carry over. If you want the plugin to run the initial sync (much slower), then just enable the plugin on an empty vault with a matching name.

## Setup (Existing Notes)

If you have existing notes that you want to sync to Google Drive, then first move them into a new vault. Follow the above procedures for setup, and then copy the notes back into the vault through the Obsidian app. We did some experimenting with copying through file explorer while Obsidian was open, and it seemed to work fine, but we still suggest using the app.

![Obsidian](https://ogd.richardxiong.com/obsidian.webp) ![Drive](https://ogd.richardxiong.com/drive.webp)

## Syncing (Pull)

Whenever you open Obsidian or run the pull command through the command palette, the plugin will check for changes on Google Drive, and if there are any, it will pull those changes. If there are any conflicts, the plugin will have local changes override cloud changes except for file deletion. If a file creation/modification is being pulled with the client having locally deleted the file, the plugin will bring the file back to match the cloud state. The plugin prefers cloud changes over local changes for *.obsidian* configuration files, however. You can also revert changes to the cloud state by running the reset command through the command palette. **Make sure to sync with an adequate internet connection as closing the app or losing connection while syncing could lead to data corruption.**

## Syncing (Push)

To sync changes from the local vault to Google Drive, press the sync button or run the push command through the command palette, and it will begin syncing. While you do not have to sync before you close Obsidian, we suggest doing so to ensure that the vault is up to date. When you try to push, the plugin will first pull changes from the cloud.

![Sync](https://ogd.richardxiong.com/sync.webp) ![Vaults](https://ogd.richardxiong.com/vaults.webp)

## Multiple Vaults

To sync multiple vaults, simply enable the plugin on vaults with different names. Our plugin syncs together vaults that have the same name, so if you want to sync a new device to an existing vault, just make sure the vault has the same name. We suggest keeping the name of the Google Drive folder the same as the vault name to avoid confusion, especially for setting up new devices for sync.

## Renaming Vaults

If you are using our plugin to sync, you **cannot directly rename vaults anymore**. This is because our plugin uses the name of the vault to properly sync. If you want to change a vault name, create a new vault with the new name, set up its sync, and move the contents through the Obsidian app.

![Rename](https://ogd.richardxiong.com/rename.webp) ![Warning](https://ogd.richardxiong.com/warning.webp)

## Warning

Do **not** manually upload files into the generated OGD Sync folder or use some other method of Google Drive sync. Our plugin cannot see these files, and it will likely break functionality, potentially causing data loss. Instead, use this plugin on any device you wish to sync the vault between. Also be careful about manually change files outside of the Obsidian app. Our plugin tracks file changes through the Obsidian API, and if you change files outside of the app, the plugin might not be able to track these changes. We did testing on changing files through file explorer while the Obsidian app was open, and it seemed to work fairly well, but we still suggest using the app.

## Github

If you want, you can check out the source code for this plugin [here](https://github.com/RichardX366/Obsidian-Google-Drive). Feel free to make suggestions and pull requests! You can also check out the source code for this website [here](https://github.com/RichardX366/Obsidian-Google-Drive-Website). If you want to verify any of our claims about data security, you can check through both Github repositories to see for yourself. If you don't trust our servers, you can always host your own with the code provided (steps are not given, but it just involves copying the code, finding a place to host it, and making a Google Cloud project).

![Github](https://ogd.richardxiong.com/github.webp)