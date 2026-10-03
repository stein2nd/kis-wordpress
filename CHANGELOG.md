# KIS WordPress - CHANGELOG

## unreleased

## 0.0.4 - 2026-10-03

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) の仮称 `s2j-◯◯◯◯` を、GatherPress フォーク + S2J Webinar + S2J Webinar Service に分割

* 開発用 npm 依存を更新 (`@s2j/docs-linter` ^1.0.26、`rollup` ^4.64.0、`vite` ^8.3.2)
* VS Code 設定の `npm.enableScriptExplorer` を `json.schemaDownload.enable` へ変更

## 0.0.4 - 2026-09-29

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) の S2J Legal を S2J Site Policy Manager (ポリシー台帳) へ改称
* 仕様ドラフト (`docs_mod/specs.md`) の横断機能を S2J サービスとして切り出し (Content Dates / Query Pinned / Inquiry Destination)

## 0.0.3 - 2026-09-28

### Added

* ブロック開発用に React と Vite を追加 (`react` ^19.3.0、`vite` ^8.3.1)

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) の関連リポジトリを本モノレポ / 別 repo / 既存 S2J の三段に再編

## 0.0.2 - 2026-09-26

### Added

* Cursor 用のプロジェクト設定 (`.cursor/allowlist.json`)

### Changed

* 開発用 npm 依存を更新 (`@s2j/docs-linter` ^1.0.25)

## 0.0.1 - 2026-09-05

### Added

* モノレポの初回骨格 (GPL-3.0-or-later、README)
* エコシステム仕様の起点ドラフト (`docs_mod/specs.md`)
* ドキュメント Lint 基盤 (`@s2j/docs-linter`、`npm run lint:docs`、GitHub Actions `docs-lint.yml`)
