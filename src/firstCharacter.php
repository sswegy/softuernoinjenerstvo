<?php

function firstCharacter(string $input): string
{
    return $input === '' ? '?' : $input[0];
}