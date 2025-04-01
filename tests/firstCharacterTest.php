<?php

use function firstCharacter;

it('returns first character of non-empty string', function () {
    expect(firstCharacter('hello'))->toBe('h');
    expect(firstCharacter(' world'))->toBe(' ');
    expect(firstCharacter('123'))->toBe('1');
});

it('returns ? for empty string', function () {
    expect(firstCharacter(''))->toBe('?');
});

it('handles single character strings', function () {
    expect(firstCharacter('a'))->toBe('a');
    expect(firstCharacter('?'))->toBe('?');
});