# Lite YouTube Embed

A [Flarum](http://flarum.org) extension.

Replaces iframe YouTube embeds from [`fof/formatting`](https://github.com/FriendsOfFlarum/formatting) with a lightweight embed implementation using [`lite-youtube`](https://github.com/justinribeiro/lite-youtube).

The `MediaEmbed` option in `fof/formatting` must be enabled for this extension to work.

## Installation

Install with composer:

```sh
composer require constructions-incongrues/flarum-lite-youtube:"*"
```

## Updating

```sh
composer update constructions-incongrues/flarum-lite-youtube:"*"
php flarum migrate
php flarum cache:clear
```

## Development

### Release Process

This project uses [Release Please](https://github.com/googleapis/release-please) for automated releases. To create a new release:

1. Use [Conventional Commits](https://www.conventionalcommits.org/) format for your commits:
   - `feat:` for new features (minor version bump)
   - `fix:` for bug fixes (patch version bump)
   - `chore:` for maintenance tasks (no version bump)
   - Add `!` or `BREAKING CHANGE:` for breaking changes (major version bump)

2. When you push to the `main` branch, Release Please will automatically:
   - Create/update a release PR with changelog
   - Create a GitHub release when the PR is merged
   - Update Packagist automatically

Example commits:
```
feat: add new YouTube embed options
fix: resolve player initialization issue
chore: update dependencies
```

## Support
This extension is under minimal maintenance.

It was developed for a client and released as open-source for the benefit of the community.
I might publish simple bugfixes or compatibility updates for free.

## Links

- [Packagist](https://packagist.org/packages/sycho/flarum-lite-youtube)
- [GitHub](https://github.com/SychO9/flarum-lite-youtube)
- [Discuss](https://discuss.flarum.org/d/31817-lite-youtube-embed/5)
