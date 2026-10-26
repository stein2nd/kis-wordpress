# KIS WordPress - CHANGELOG

## unreleased

## 0.0.5 - 2026-10-26

### Added

* ブロック / 管理 JS 用の Vite 設定の骨格 (`vite.config.ts`)

### Changed

* `makejson` を purge デフォルトに変更し、JED を残す場合は `makejson:keep` (`--no-purge`) を使用
* `.gitignore` に `languages/*-{hash}.json` (JED) をコミット対象とする旨の注記を追加
* `pretest:unit:php:local` を `test:unit:php:local` 直前に実行するよう npm スクリプトを整理

## 0.0.5 - 2026-10-25

### Added

* PHP 開発基盤 (`composer.json` / `composer.lock`、PHPUnit スモーク `tests/`、`phpunit.xml.dist`)
* PHP 静的解析・コーディング規約の dist 設定 (`phpstan.neon.dist`、`phpcs.xml.dist`、`phpcs.wpcs.xml.dist`、`.env.tests.example`)

### Changed

* PHP 要件の下限を **v8.3** に統一 (他 S2J プラグインおよび [WordPress 推奨要件](https://ja.wordpress.org/about/requirements/) に合わせる)
* GitHub Actions `phpunit.yml` を PHP v8.3 + `composer test` のみに整理 (未定義の `npm run phpunit:wp-env` を呼ばない)
* `README.md` の PHP バッジを v8.3+ に更新
* `npm run lint:php` 等から Composer スクリプトに PHP Lint を委譲
* 仕様ドラフト (`docs_mod/specs.md`) の別 repo / 既存 S2J 一覧に `状態` 列を追加し、Similarity / Media Library Date Corrector / Webinar Source QR を索引に追加

## 0.0.4 - 2026-10-11

### Changed

* 開発用 npm 依存を更新 (`rollup` ^4.64.5、`vite` ^8.3.4)

## 0.0.4 - 2026-10-10

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) の kis-event-manager 差し替え先の表記を修正

## 0.0.4 - 2026-10-08

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) の「次」を「下記」または「右記」に変更

## 0.0.4 - 2026-10-06

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) に、S2J Webinar Survey と S2J Webinar Survey Service の仕様索引を追加

## 0.0.4 - 2026-10-04

### Changed

* 仕様ドラフト (`docs_mod/specs.md`) に、プラグイン「Content Dates」「Query Pinned」「Inquiry Destination」「Video Publisher」の仕様索引を追加
* 開発用 npm 依存を更新 (`@s2j/docs-linter` ^1.0.27)

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
