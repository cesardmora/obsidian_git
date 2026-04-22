---
title: "VS Code"
source: "https://docs.ollama.com/integrations/vscode"
author:
published:
created: 2026-04-13
description:
tags:
  - "clippings"
---
VS Code includes built-in AI chat through GitHub Copilot Chat. Ollama models can be used directly in the Copilot Chat model picker.

![VS Code with Ollama](https://mintcdn.com/ollama-9269c548/jdSqBzVzS-lQuH5E/images/vscode.png?w=2500&fit=max&auto=format&n=jdSqBzVzS-lQuH5E&q=85&s=de1d02eed23e3dd101f29003f3893e87)

## Prerequisites

VS Code requires you to be logged in to use its model selector, even for custom models. This doesn’t require a paid GitHub Copilot account; GitHub Copilot Free will enable model selection for custom models.

## Quick setup

```shellscript
ollama launch vscode
```

Recommended models will be shown after running the command. See the latest models at [ollama.com](https://ollama.com/search?c=tools). Make sure **Local** is selected at the bottom of the Copilot Chat panel to use your Ollama models.

![Ollama Local Models](https://mintcdn.com/ollama-9269c548/jdSqBzVzS-lQuH5E/images/local.png?w=2500&fit=max&auto=format&n=jdSqBzVzS-lQuH5E&q=85&s=165bcd5669e65b597c828c2edbb441a0)

## Run directly with a model

```shellscript
ollama launch vscode --model qwen3.5:cloud
```

Cloud models are also available at [ollama.com](https://ollama.com/search?c=cloud).

## Manual setup

To configure Ollama manually without `ollama launch`:
1. Open the **Copilot Chat** side bar from the top right corner
	![VS Code chat Sidebar](https://mintcdn.com/ollama-9269c548/Q0hzAGiFk9hDuXaH/images/vscode-sidebar.png?w=2500&fit=max&auto=format&n=Q0hzAGiFk9hDuXaH&q=85&s=6a995df960d939abd4c3ee29f3e58fac)
2. Click the **settings gear icon** () to bring up the Language Models window
	![VS Code model picker](https://mintcdn.com/ollama-9269c548/jdSqBzVzS-lQuH5E/images/vscode-other-models.png?w=2500&fit=max&auto=format&n=jdSqBzVzS-lQuH5E&q=85&s=8043f260177df96aa7111c8596dd9383)
3. Click **Add Models** and select **Ollama** to load all your Ollama models into VS Code
	![VS Code model options dropdown to add ollama models](https://mintcdn.com/ollama-9269c548/jdSqBzVzS-lQuH5E/images/vscode-add-ollama.png?w=2500&fit=max&auto=format&n=jdSqBzVzS-lQuH5E&q=85&s=f46b8dca82c62f3d8604bc22323fa29f)
4. Click the **Unhide** button in the model picker to show your Ollama models
	![VS Code unhide models button](https://mintcdn.com/ollama-9269c548/jdSqBzVzS-lQuH5E/images/vscode-unhide.png?w=2500&fit=max&auto=format&n=jdSqBzVzS-lQuH5E&q=85&s=085b2f353096b69ebf1cc23a97c4c0b6)