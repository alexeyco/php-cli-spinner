<?php

namespace Spinner;

const DOTS   = ['⠋', '⠙', '⠹', '⠸', '⠼', '⠴', '⠦', '⠧', '⠇', '⠏'];
const DOTS2  = ['⣾', '⣽', '⣻', '⢿', '⡿', '⣟', '⣯', '⣷'];
const DOTS3  = ['⠋', '⠙', '⠚', '⠞', '⠖', '⠦', '⠴', '⠲', '⠳', '⠓'];
const DOTS4  = ['⠄', '⠆', '⠇', '⠋', '⠙', '⠸', '⠰', '⠠', '⠰', '⠸', '⠙', '⠋', '⠇', '⠆'];
const DOTS5  = ['⠋', '⠙', '⠚', '⠒', '⠂', '⠂', '⠒', '⠲', '⠴', '⠦', '⠖', '⠒', '⠐', '⠐', '⠒', '⠓', '⠋'];
const DOTS6  = ['⠁', '⠉', '⠙', '⠚', '⠒', '⠂', '⠂', '⠒', '⠲', '⠴', '⠤', '⠄', '⠄', '⠤', '⠴', '⠲', '⠒', '⠂', '⠂', '⠒', '⠚', '⠙', '⠉', '⠁'];
const DOTS7  = ['⠈', '⠉', '⠋', '⠓', '⠒', '⠐', '⠐', '⠒', '⠖', '⠦', '⠤', '⠠', '⠠', '⠤', '⠦', '⠖', '⠒', '⠐', '⠐', '⠒', '⠓', '⠋', '⠉', '⠈'];
const DOTS8  = ['⠁', '⠁', '⠉', '⠙', '⠚', '⠒', '⠂', '⠂', '⠒', '⠲', '⠴', '⠤', '⠄', '⠄', '⠤', '⠠', '⠠', '⠤', '⠦', '⠖', '⠒', '⠐', '⠐', '⠒', '⠓', '⠋', '⠉', '⠈', '⠈'];
const DOTS9  = ['⢹', '⢺', '⢼', '⣸', '⣇', '⡧', '⡗', '⡏'];
const DOTS10 = ['⢄', '⢂', '⢁', '⡁', '⡈', '⡐', '⡠'];
const DOTS11 = ['⠁', '⠂', '⠄', '⡀', '⢀', '⠠', '⠐', '⠈'];
const DOTS12 = ['⢀⠀', '⡀⠀', '⠄⠀', '⢂⠀', '⡂⠀', '⠅⠀', '⢃⠀', '⡃⠀', '⠍⠀', '⢋⠀', '⡋⠀', '⠍⠁', '⢋⠁', '⡋⠁', '⠍⠉', '⠋⠉', '⠋⠉', '⠉⠙', '⠉⠙', '⠉⠩', '⠈⢙', '⠈⡙', '⢈⠩', '⡀⢙', '⠄⡙', '⢂⠩', '⡂⢘', '⠅⡘', '⢃⠨', '⡃⢐', '⠍⡐', '⢋⠠', '⡋⢀', '⠍⡁', '⢋⠁', '⡋⠁', '⠍⠉', '⠋⠉', '⠋⠉', '⠉⠙', '⠉⠙', '⠉⠩', '⠈⢙', '⠈⡙', '⠈⠩', '⠀⢙', '⠀⡙', '⠀⠩', '⠀⢘', '⠀⡘', '⠀⠨', '⠀⢐', '⠀⡐', '⠀⠠', '⠀⢀', '⠀⡀'];

const LINE  = ['-', '\\', '|', '/'];
const LINE2 = ['⠂', '-', '–', '—', '–', '-'];

const PIPE = ['┤', '┘', '┴', '└', '├', '┌', '┬', '┐'];

const SIMPLE_DOTS = [
    '.  ',
    '.. ',
    '...',
    '   '
];

const SIMPLE_DOTS_SCROLLING = [
    '.  ',
    '.. ',
    '...',
    ' ..',
    '  .',
    '   '
];

const STAR  = ['✶', '✸', '✹', '✺', '✹', '✷'];
const STAR2 = ['+', 'x', '*'];

const FLIP = ['_', '_', '_', '-', '`', '`', '\'', '´', '-', '_', '_', '_'];

const HAMBURGER = ['☱', '☲', '☴'];

const GROW_VERTICAL = ['▁', '▃', '▄', '▅', '▆', '▇', '▆', '▅', '▄', '▃'];

const GROW_HORIZONTAL = ['▏', '▎', '▍', '▌', '▋', '▊', '▉', '▊', '▋', '▌', '▍', '▎'];

const BALOON = [' ', '.', 'o', 'O', '@', '*', ' '];

const BALOON2 = ['.', 'o', 'O', '°', 'O', 'o', '.'];

const NOISE = ['▓', '▒', '░'];

const BOUNCE = ['⠁', '⠂', '⠄', '⠂'];

const BOX_BOUNCE = ['▖', '▘', '▝', '▗'];

const BOX_BOUNCE2 = ['▌', '▀', '▐', '▄'];

const TRIANGLE = ['◢', '◣', '◤', '◥'];

const ARC = ['◜', '◠', '◝', '◞', '◡', '◟'];

const CIRCLE = ['◡', '⊙', '◠'];

const SQUARE_CORNERS = ['◰', '◳', '◲', '◱'];

const CIRCLE_QUARTERS = ['◴', '◷', '◶', '◵'];
const CIRCLE_HALVES   = ['◐', '◓', '◑', '◒'];

const SQUISH = ['╫', '╪'];

const TOGGLE   = ['⊶', '⊷'];
const TOGGLE2  = ['▫', '▪'];
const TOGGLE3  = ['□', '■'];
const TOGGLE4  = ['■', '□', '▪', '▫'];
const TOGGLE5  = ['▮', '▯'];
const TOGGLE6  = ['ဝ', '၀'];
const TOGGLE7  = ['⦾', '⦿'];
const TOGGLE8  = ['◍', '◌'];
const TOGGLE9  = ['◉', '◎'];
const TOGGLE10 = ['㊂', '㊀', '㊁'];
const TOGGLE11 = ['⧇', '⧆'];
const TOGGLE12 = ['☗', '☖'];
const TOGGLE13 = ['=', '*', '-'];

const ARROW  = ['←', '↖', '↑', '↗', '→', '↘', '↓', '↙'];
const ARROW2 = ['⬆️ ', '↗️ ', '➡️ ', '↘️ ', '⬇️ ', '↙️ ', '⬅️ ', '↖️ '];
const ARROW3 = [
    '▹▹▹▹▹',
    '▸▹▹▹▹',
    '▹▸▹▹▹',
    '▹▹▸▹▹',
    '▹▹▹▸▹',
    '▹▹▹▹▸'
];

const BOUNCING_BAR = [
    '[    ]',
    '[=   ]',
    '[==  ]',
    '[=== ]',
    '[ ===]',
    '[  ==]',
    '[   =]',
    '[    ]',
    '[   =]',
    '[  ==]',
    '[ ===]',
    '[====]',
    '[=== ]',
    '[==  ]',
    '[=   ]'
];

const BOUNCING_BALL = [
    '( ●    )',
    '(  ●   )',
    '(   ●  )',
    '(    ● )',
    '(     ●)',
    '(    ● )',
    '(   ●  )',
    '(  ●   )',
    '( ●    )',
    '(●     )'
];

const SMILEY = ['😄 ', '😝 '];

const MONKEY = ['🙈 ', '🙈 ', '🙉 ', '🙊 '];

const HEARTS = ['💛 ', '💙 ', '💜 ', '💚 ', '❤️ '];

const CLOCK = ['🕐 ', '🕑 ', '🕒 ', '🕓 ', '🕔 ', '🕕 ', '🕖 ', '🕗 ', '🕘 ', '🕙 ', '🕚 '];

const EARTH = ['🌍 ', '🌎 ', '🌏 '];

const MOON = ['🌑 ', '🌒 ', '🌓 ', '🌔 ', '🌕 ', '🌖 ', '🌗 ', '🌘 '];

const RUNNER = ['🚶 ', '🏃 '];

const PONG = [
    '▐|\\____________▌',
    '▐_|\\___________▌',
    '▐__|\\__________▌',
    '▐___|\\_________▌',
    '▐____|\\________▌',
    '▐_____|\\_______▌',
    '▐______|\\______▌',
    '▐_______|\\_____▌',
    '▐________|\\____▌',
    '▐_________|\\___▌',
    '▐__________|\\__▌',
    '▐___________|\\_▌',
    '▐____________|\\▌',
    '▐____________/|▌',
    '▐___________/|_▌',
    '▐__________/|__▌',
    '▐_________/|___▌',
    '▐________/|____▌',
    '▐_______/|_____▌',
    '▐______/|______▌',
    '▐_____/|_______▌',
    '▐____/|________▌',
    '▐___/|_________▌',
    '▐__/|__________▌',
    '▐_/|___________▌',
    '▐/|____________▌'
];

const DQPB = ['d', 'q', 'p', 'b'];

const WEATHER = ['☀️ ', '☀️ ', '☀️ ', '🌤 ', '⛅️ ', '🌥 ', '☁️ ', '🌧 ', '🌨 ', '🌧 ', '🌨 ', '🌧 ', '🌨 ', '⛈ ', '🌨 ', '🌧 ', '🌨 ', '☁️ ', '🌥 ', '⛅️ ', '🌤 ', '☀️ ', '☀️ '];

const CHRISTMAS = ['🌲', '🎄'];
