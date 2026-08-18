# AGENTS.md — Provider-Agnostic Agent Instructions

## Workspace storage conservation

<!-- workspace-scratch-storage-contract-v1 -->
Use only this repository's existing canonical live checkout. A dirty, divergent, detached, ambiguous, or concurrently owned checkout is a blocker: preserve it and stop. Do not create a clone, fork, worktree, feature branch, full repository/workspace copy, or external dependency/build environment to bypass that blocker. Never place repositories, worktrees, workspace copies, package installations, builds, or development servers under `/tmp` or `/private/tmp`, including aliases that resolve there. Small, bounded non-repository temporary files remain allowed. Load the Agent Operating Layer `workspace-scratch-storage-policy` contract through the workspace registry when available.


<!-- phase-5-provider-agnostic-baseline -->

Last updated: 2026-04-29

## Project overview

Zero-dependency static HTML/CSS/JavaScript portfolio site for Kersten Neuman, deployed as a client-facing personal site.

## Operating rules for AI agents

- Read before editing: inspect README.md, existing docs, and nearby HTML/CSS/JS before making changes.
- Preserve existing documentation. Do not delete docs; update or append when behavior changes.
- Do not modify CLAUDE.md files if one is added later.
- Prefer compatibility-first changes. Avoid breaking public URLs, static hosting assumptions, accessibility, responsive layout, or client identity.
- Do not commit, push, deploy, rotate secrets, or run destructive commands unless explicitly asked in the current session.

## Documentation expectations

- Update README/docs when local preview, deployment, content structure, or customization steps change.
- Keep public copy accurate and client-appropriate.

## Build, test, and local commands

Only run commands supported by checked-in docs/config. Confidently discovered local preview commands:

- `python3 -m http.server 8000`
- `npx http-server .`

## Compatibility and safety constraints

- Keep the site static and dependency-light unless the user explicitly approves a stack change.
- Preserve client identity, accessibility, responsive layout, and deployed URL assumptions.
- No secrets policy: never print, commit, or invent credentials, tokens, cookies, private keys, OAuth secrets, API keys, personal data, or production-only configuration. Use placeholders in docs/examples.
