[![QwenLM%2Fqwen-code | Trendshift](https://camo.githubusercontent.com/40cd1374b4b41243d6be97bdc392ae6de8fa7eb711b9c281ab1ee97716111367/68747470733a2f2f7472656e6473686966742e696f2f6170692f62616467652f7265706f7369746f726965732f3135323837)](https://trendshift.io/repositories/15287)

**An open-source AI agent that lives in your terminal.**

[中文](https://qwenlm.github.io/qwen-code-docs/zh/users/overview) | [Deutsch](https://qwenlm.github.io/qwen-code-docs/de/users/overview) | [français](https://qwenlm.github.io/qwen-code-docs/fr/users/overview) | [日本語](https://qwenlm.github.io/qwen-code-docs/ja/users/overview) | [Русский](https://qwenlm.github.io/qwen-code-docs/ru/users/overview) | [Português (Brasil)](https://qwenlm.github.io/qwen-code-docs/pt-BR/users/overview)

## 🎉 News

- **2026-04-13**: Qwen OAuth free tier policy update: daily quota adjusted to 100 requests/day (from 1,000). The free tier will be discontinued on 2026-04-15. Consider using [OpenRouter](https://openrouter.ai/), [Fireworks AI](https://app.fireworks.ai/), or [Alibaba Cloud ModelStudio](https://modelstudio.console.alibabacloud.com/ap-southeast-1?tab=doc#/doc/?type=model&url=2840914_2&modelId=qwen3.6-plus) as alternatives.
- **2026-04-02**: Qwen3.6-Plus is now live! Sign in via Qwen OAuth to use it directly, or get an API key from [Alibaba Cloud ModelStudio](https://modelstudio.console.alibabacloud.com/ap-southeast-1?tab=doc#/doc/?type=model&url=2840914_2&modelId=qwen3.6-plus) to access it through the OpenAI-compatible API.
- **2026-02-16**: Qwen3.5-Plus is now live!

## Why Qwen Code?

Qwen Code is an open-source AI agent for the terminal, optimized for Qwen series models. It helps you understand large codebases, automate tedious work, and ship faster.

- **Multi-protocol, OAuth free tier**: use OpenAI / Anthropic / Gemini-compatible APIs, or sign in with Qwen OAuth for 100 free requests/day (free tier ending 2026-04-15). After that, switch to [OpenRouter](https://openrouter.ai/), [Fireworks AI](https://app.fireworks.ai/), or [Alibaba Cloud ModelStudio](https://modelstudio.console.alibabacloud.com/ap-southeast-1?tab=doc#/doc/?type=model&url=2840914_2&modelId=qwen3.6-plus).
- **Open-source, co-evolving**: both the framework and the Qwen3-Coder model are open-source—and they ship and evolve together.
- **Agentic workflow, feature-rich**: rich built-in tools (Skills, SubAgents) for a full agentic workflow and a Claude Code-like experience.
- **Terminal-first, IDE-friendly**: built for developers who live in the command line, with optional integration for VS Code, Zed, and JetBrains IDEs.

[![](https://camo.githubusercontent.com/3a671b8b5cf0417cb62e7615dc87a09b3eef8860939586e35e9eb94387e88fa0/68747470733a2f2f67772e616c6963646e2e636f6d2f696d6765787472612f69312f4f31434e30314432447669533177777445744d77497a4a5f2121363030303030303030363337332d322d7470732d313630302d3930302e706e67)](https://camo.githubusercontent.com/3a671b8b5cf0417cb62e7615dc87a09b3eef8860939586e35e9eb94387e88fa0/68747470733a2f2f67772e616c6963646e2e636f6d2f696d6765787472612f69312f4f31434e30314432447669533177777445744d77497a4a5f2121363030303030303030363337332d322d7470732d313630302d3930302e706e67)

## Installation

#### Linux / macOS

```
bash -c "$(curl -fsSL https://qwen-code-assets.oss-cn-hangzhou.aliyuncs.com/installation/install-qwen.sh)"
```

#### Windows (Run as Administrator CMD)

```
curl -fsSL -o %TEMP%\install-qwen.bat https://qwen-code-assets.oss-cn-hangzhou.aliyuncs.com/installation/install-qwen.bat && %TEMP%\install-qwen.bat
```

> **Note**: It's recommended to restart your terminal after installation to ensure environment variables take effect.

### Manual Installation

#### Prerequisites

Make sure you have Node.js 20 or later installed. Download it from [nodejs.org](https://nodejs.org/en/download).

#### NPM

```
npm install -g @qwen-code/qwen-code@latest
```

#### Homebrew (macOS, Linux)

```
brew install qwen-code
```

## Quick Start

```
# Start Qwen Code (interactive)
qwen

# Then, in the session:
/help
/auth
```

On first use, you'll be prompted to sign in. You can run `/auth` anytime to switch authentication methods.

Example prompts:

```
What does this project do?
Explain the codebase structure.
Help me refactor this function.
Generate unit tests for this module.
```

Click to watch a demo video

## 🦞 Use Qwen Code for Coding Tasks in Claw

Copy the prompt below and paste it into your agent:

```
Use Qwen Code as a coding agent. First, fetch and read this skill reference:
https://raw.githubusercontent.com/QwenLM/qwen-code/refs/heads/main/.qwen/skills/qwen-code-claw/SKILL.md
Then follow the instructions inside to install, authenticate, and use Qwen Code via acpx for all coding tasks.
```

## Authentication

Qwen Code supports two authentication methods:

- **Qwen OAuth (recommended & free)**: sign in with your `qwen.ai` account in a browser.
- **API-KEY**: use an API key to connect to any supported provider (OpenAI, Anthropic, Google GenAI, Alibaba Cloud ModelStudio, and other compatible endpoints).

Start `qwen`, then run:

```
/auth
```

Choose **Qwen OAuth** and complete the browser flow. Your credentials are cached locally so you usually won't need to log in again.

> **Note:** In non-interactive or headless environments (e.g., CI, SSH, containers), you typically **cannot** complete the OAuth browser login flow. In these cases, please use the API-KEY authentication method.

#### API-KEY (flexible)

Use this if you want more flexibility over which provider and model to use. Supports multiple protocols:

- **OpenAI-compatible**: Alibaba Cloud ModelStudio, ModelScope, OpenAI, OpenRouter, and other OpenAI-compatible providers
- **Anthropic**: Claude models
- **Google GenAI**: Gemini models

The **recommended** way to configure models and providers is by editing `~/.qwen/settings.json` (create it if it doesn't exist). This file lets you define all available models, API keys, and default settings in one place.

##### Quick Setup in 3 Steps

**Step 1:** Create or edit `~/.qwen/settings.json`

Here is a complete example:

```
{
  "modelProviders": {
    "openai": [
      {
        "id": "qwen3.6-plus",
        "name": "qwen3.6-plus",
        "baseUrl": "https://dashscope.aliyuncs.com/compatible-mode/v1",
        "description": "Qwen3-Coder via Dashscope",
        "envKey": "DASHSCOPE_API_KEY"
      }
    ]
  },
  "env": {
    "DASHSCOPE_API_KEY": "sk-xxxxxxxxxxxxx"
  },
  "security": {
    "auth": {
      "selectedType": "openai"
    }
  },
  "model": {
    "name": "qwen3.6-plus"
  }
}
```

**Step 2:** Understand each field

| Field | What it does |
| --- | --- |
| `modelProviders` | Declares which models are available and how to connect to them. Keys like `openai`, `anthropic`, `gemini` represent the API protocol. |
| `modelProviders[].id` | The model ID sent to the API (e.g. `qwen3.6-plus`, `gpt-4o`). |
| `modelProviders[].envKey` | The name of the environment variable that holds your API key. |
| `modelProviders[].baseUrl` | The API endpoint URL (required for non-default endpoints). |
| `env` | A fallback place to store API keys (lowest priority; prefer `.env` files or `export` for sensitive keys). |
| `security.auth.selectedType` | The protocol to use on startup (`openai`, `anthropic`, `gemini`, `vertex-ai`). |
| `model.name` | The default model to use when Qwen Code starts. |

**Step 3:** Start Qwen Code — your configuration takes effect automatically:

```
qwen
```

Use the `/model` command at any time to switch between all configured models.

##### More Examples

Coding Plan (Alibaba Cloud ModelStudio) — fixed monthly fee, higher quotas
```
{
  "modelProviders": {
    "openai": [
      {
        "id": "qwen3.6-plus",
        "name": "qwen3.6-plus (Coding Plan)",
        "baseUrl": "https://coding.dashscope.aliyuncs.com/v1",
        "description": "qwen3.6-plus from ModelStudio Coding Plan",
        "envKey": "BAILIAN_CODING_PLAN_API_KEY"
      },
      {
        "id": "qwen3.5-plus",
        "name": "qwen3.5-plus (Coding Plan)",
        "baseUrl": "https://coding.dashscope.aliyuncs.com/v1",
        "description": "qwen3.5-plus with thinking enabled from ModelStudio Coding Plan",
        "envKey": "BAILIAN_CODING_PLAN_API_KEY",
        "generationConfig": {
          "extra_body": {
            "enable_thinking": true
          }
        }
      },
      {
        "id": "glm-4.7",
        "name": "glm-4.7 (Coding Plan)",
        "baseUrl": "https://coding.dashscope.aliyuncs.com/v1",
        "description": "glm-4.7 with thinking enabled from ModelStudio Coding Plan",
        "envKey": "BAILIAN_CODING_PLAN_API_KEY",
        "generationConfig": {
          "extra_body": {
            "enable_thinking": true
          }
        }
      },
      {
        "id": "kimi-k2.5",
        "name": "kimi-k2.5 (Coding Plan)",
        "baseUrl": "https://coding.dashscope.aliyuncs.com/v1",
        "description": "kimi-k2.5 with thinking enabled from ModelStudio Coding Plan",
        "envKey": "BAILIAN_CODING_PLAN_API_KEY",
        "generationConfig": {
          "extra_body": {
            "enable_thinking": true
          }
        }
      }
    ]
  },
  "env": {
    "BAILIAN_CODING_PLAN_API_KEY": "sk-xxxxxxxxxxxxx"
  },
  "security": {
    "auth": {
      "selectedType": "openai"
    }
  },
  "model": {
    "name": "qwen3.6-plus"
  }
}
```

> Subscribe to the Coding Plan and get your API key at [Alibaba Cloud ModelStudio(Beijing)](https://bailian.console.aliyun.com/cn-beijing?tab=coding-plan#/efm/coding-plan-index) or [Alibaba Cloud ModelStudio(intl)](https://modelstudio.console.alibabacloud.com/?tab=coding-plan#/efm/coding-plan-index).

Multiple providers (OpenAI + Anthropic + Gemini)
```
{
  "modelProviders": {
    "openai": [
      {
        "id": "gpt-4o",
        "name": "GPT-4o",
        "envKey": "OPENAI_API_KEY",
        "baseUrl": "https://api.openai.com/v1"
      }
    ],
    "anthropic": [
      {
        "id": "claude-sonnet-4-20250514",
        "name": "Claude Sonnet 4",
        "envKey": "ANTHROPIC_API_KEY"
      }
    ],
    "gemini": [
      {
        "id": "gemini-2.5-pro",
        "name": "Gemini 2.5 Pro",
        "envKey": "GEMINI_API_KEY"
      }
    ]
  },
  "env": {
    "OPENAI_API_KEY": "sk-xxxxxxxxxxxxx",
    "ANTHROPIC_API_KEY": "sk-ant-xxxxxxxxxxxxx",
    "GEMINI_API_KEY": "AIzaxxxxxxxxxxxxx"
  },
  "security": {
    "auth": {
      "selectedType": "openai"
    }
  },
  "model": {
    "name": "gpt-4o"
  }
}
```
Enable thinking mode (for supported models like qwen3.5-plus)
```
{
  "modelProviders": {
    "openai": [
      {
        "id": "qwen3.5-plus",
        "name": "qwen3.5-plus (thinking)",
        "envKey": "DASHSCOPE_API_KEY",
        "baseUrl": "https://dashscope.aliyuncs.com/compatible-mode/v1",
        "generationConfig": {
          "extra_body": {
            "enable_thinking": true
          }
        }
      }
    ]
  },
  "env": {
    "DASHSCOPE_API_KEY": "sk-xxxxxxxxxxxxx"
  },
  "security": {
    "auth": {
      "selectedType": "openai"
    }
  },
  "model": {
    "name": "qwen3.5-plus"
  }
}
```

> **Tip:** You can also set API keys via `export` in your shell or `.env` files, which take higher priority than `settings.json` → `env`. See the [authentication guide](https://qwenlm.github.io/qwen-code-docs/en/users/configuration/auth/) for full details.

> **Security note:** Never commit API keys to version control. The `~/.qwen/settings.json` file is in your home directory and should stay private.

## Usage

As an open-source terminal agent, you can use Qwen Code in four primary ways:

1. Interactive mode (terminal UI)
2. Headless mode (scripts, CI)
3. IDE integration (VS Code, Zed)
4. TypeScript SDK

#### Interactive mode

```
cd your-project/
qwen
```

Run `qwen` in your project folder to launch the interactive terminal UI. Use `@` to reference local files (for example `@src/main.ts`).

#### Headless mode

```
cd your-project/
qwen -p "your question"
```

Use `-p` to run Qwen Code without the interactive UI—ideal for scripts, automation, and CI/CD. Learn more: [Headless mode](https://qwenlm.github.io/qwen-code-docs/en/users/features/headless).

#### IDE integration

Use Qwen Code inside your editor (VS Code, Zed, and JetBrains IDEs):

- [Use in VS Code](https://qwenlm.github.io/qwen-code-docs/en/users/integration-vscode/)
- [Use in Zed](https://qwenlm.github.io/qwen-code-docs/en/users/integration-zed/)
- [Use in JetBrains IDEs](https://qwenlm.github.io/qwen-code-docs/en/users/integration-jetbrains/)

#### TypeScript SDK

Build on top of Qwen Code with the TypeScript SDK:

- [Use the Qwen Code SDK](https://github.com/QwenLM/qwen-code/blob/main/packages/sdk-typescript/README.md)

## Commands & Shortcuts

### Session Commands

- `/help` - Display available commands
- `/clear` - Clear conversation history
- `/compress` - Compress history to save tokens
- `/stats` - Show current session information
- `/bug` - Submit a bug report
- `/exit` or `/quit` - Exit Qwen Code

### Keyboard Shortcuts

- `Ctrl+C` - Cancel current operation
- `Ctrl+D` - Exit (on empty line)
- `Up/Down` - Navigate command history

> Learn more about [Commands](https://qwenlm.github.io/qwen-code-docs/en/users/features/commands/)
> 
> **Tip**: In YOLO mode (`--yolo`), vision switching happens automatically without prompts when images are detected. Learn more about [Approval Mode](https://qwenlm.github.io/qwen-code-docs/en/users/features/approval-mode/)

## Configuration

Qwen Code can be configured via `settings.json`, environment variables, and CLI flags.

| File | Scope | Description |
| --- | --- | --- |
| `~/.qwen/settings.json` | User (global) | Applies to all your Qwen Code sessions. **Recommended for `modelProviders` and `env`.** |
| `.qwen/settings.json` | Project | Applies only when running Qwen Code in this project. Overrides user settings. |

The most commonly used top-level fields in `settings.json`:

| Field | Description |
| --- | --- |
| `modelProviders` | Define available models per protocol (`openai`, `anthropic`, `gemini`, `vertex-ai`). |
| `env` | Fallback environment variables (e.g. API keys). Lower priority than shell `export` and `.env` files. |
| `security.auth.selectedType` | The protocol to use on startup (e.g. `openai`). |
| `model.name` | The default model to use when Qwen Code starts. |

> See the [Authentication](#api-key-flexible) section above for complete `settings.json` examples, and the [settings reference](https://qwenlm.github.io/qwen-code-docs/en/users/configuration/settings/) for all available options.

## Benchmark Results

### Terminal-Bench Performance

| Agent | Model | Accuracy |
| --- | --- | --- |
| Qwen Code | Qwen3-Coder-480A35 | 37.5% |
| Qwen Code | Qwen3-Coder-30BA3B | 31.3% |

## Ecosystem

Looking for a graphical interface?

- [**AionUi**](https://github.com/iOfficeAI/AionUi) A modern GUI for command-line AI tools including Qwen Code
- [**Gemini CLI Desktop**](https://github.com/Piebald-AI/gemini-cli-desktop) A cross-platform desktop/web/mobile UI for Qwen Code

## Troubleshooting

If you encounter issues, check the [troubleshooting guide](https://qwenlm.github.io/qwen-code-docs/en/users/support/troubleshooting/).

To report a bug from within the CLI, run `/bug` and include a short title and repro steps.

## Connect with Us

- Discord: [https://discord.gg/RN7tqZCeDK](https://discord.gg/RN7tqZCeDK)
- Dingtalk: [https://qr.dingtalk.com/action/joingroup?code=v1,k1,+FX6Gf/ZDlTahTIRi8AEQhIaBlqykA0j+eBKKdhLeAE=&\_dt\_no\_comment=1&origin=1](https://qr.dingtalk.com/action/joingroup?code=v1,k1,+FX6Gf/ZDlTahTIRi8AEQhIaBlqykA0j+eBKKdhLeAE=&_dt_no_comment=1&origin=1)

## Acknowledgments

This project is based on [Google Gemini CLI](https://github.com/google-gemini/gemini-cli). We acknowledge and appreciate the excellent work of the Gemini CLI team. Our main contribution focuses on parser-level adaptations to better support Qwen-Coder models.