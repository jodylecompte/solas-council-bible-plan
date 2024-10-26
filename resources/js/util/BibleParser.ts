export type ScriptureReference = {
  label: string;
  url: string;
};

export function parseScriptureReferences(input: string): ScriptureReference[] {
  let output: ScriptureReference[] = [];
  let entries = input.split('; ');

  entries.forEach((entry) => {
    let [bookTitle, ...positionParts] = entry.split(' ');
    const shortBookTitle = books[bookTitle];

    let firstPosition = positionParts.join(' ').split(',')[0].trim();

    let chapterMatch = firstPosition.match(/^\d+/);
    let chapter = chapterMatch ? chapterMatch[0] : '';

    let startingUrl = `https://www.bible.com/bible/59/${shortBookTitle}.${chapter}`;

    output.push({
      label: entry,
      url: startingUrl,
    });
  });

  return output;
}

var books: Record<string, string> = {
  'Genesis': 'gen',
  'Exodus': 'exo',
  'Leviticus': 'lev',
  'Numbers': 'num',
  'Deuteronomy': 'deu',
  'Joshua': 'jos',
  'Judges': 'jdg',
  'Ruth': 'rut',
  '1 Samuel': '1sa',
  '2 Samuel': '2sa',
  '1 Kings': '1ki',
  '2 Kings': '2ki',
  '1 Chronicles': '1ch',
  '2 Chronicles': '2ch',
  'Ezra': 'ezr',
  'Nehemiah': 'neh',
  'Esther': 'est',
  'Job': 'job',
  'Psalm': 'psa',
  'Proverbs': 'pro',
  'Ecclesiastes': 'ecc',
  'Song of Solomon': 'sng',
  'Isaiah': 'isa',
  'Jeremiah': 'jer',
  'Lamentations': 'lam',
  'Ezekiel': 'ezk',
  'Daniel': 'dan',
  'Hosea': 'hos',
  'Joel': 'jol',
  'Amos': 'amo',
  'Obadiah': 'oba',
  'Jonah': 'jon',
  'Micah': 'mic',
  'Nahum': 'nam',
  'Habakkuk': 'hab',
  'Zephaniah': 'zep',
  'Haggai': 'hag',
  'Zechariah': 'zec',
  'Malachi': 'mal',
  'Matthew': 'mat',
  'Mark': 'mrk',
  'Luke': 'lke',
  'John': 'jhn',
  'Acts': 'act',
  'Romans': 'rom',
  '1 Corinthians': '1co',
  '2 Corinthians': '2co',
  'Galatians': 'gal',
  'Ephesians': 'eph',
  'Philippians': 'php',
  'Colossians': 'col',
  '1 Thessalonians': '1th',
  '2 Thessalonians': '2th',
  '1 Timothy': '1ti',
  '2 Timothy': '2ti',
  'Titus': 'tit',
  'Philemon': 'phm',
  'Hebrews': 'heb',
  'James': 'jas',
  '1 Peter': '1pe',
  '2 Peter': '2pe',
  '1 John': '1jn',
  '2 John': '2jn',
  '3 John': '3jn',
  'Jude': 'jud',
  'Revelation': 'rev',
};
