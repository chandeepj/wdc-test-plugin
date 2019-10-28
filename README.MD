WDC Test Plugin
===
Plugin for WebDevChampion interview test

This plugin does the following things

1) Creates a CPT named `wdc-demo` 
2) Replaces all the occurrences of “Hello” with “Good Morning”, only if the post is viewed before 11AM (client time not server time)
3) The CPT permalinks uses querystrings instead of slugs.
4) Text replace script wont run if its not `wdc-demo` CPT.