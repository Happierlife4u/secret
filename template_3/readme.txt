Quiz-EZ Quiz-Lander Editing Rules:

1) All of the information that you supply to the Quiz-EZ Quiz-Lander is in "index.php",
   at the top of the file, and is formatted in the following manner:
   
   $someThing = <<< SOMETHING_END
   This is where your information for this particular something goes!!
   SOMETHING_END;
   
2) You must NEVER REMOVE that 1st line (with the "<<< SOMETHING_END" in it)
   nor its matching "SOMETHING_END;" line at the bottom, even if your intent is
   to not enter anything between them.  You should only make changes to what is
   between those "bracketing lines".
   
3) Whatever you put between the bracketing lines can be broken up over multiple
   lines for readability, as long as the break is where a space can appear.  The
   multiple lines will be put back together automatically within the quiz lander.
   For example, the single line:
   
   The quick brown fox jumps over the lazy dog.
   
   May also be entered as the following three lines:
   
   The quick brown
   fox jumps over
   the lazy dog.
   
4) If you wish to enter multiple paragraphs of data for a particular entry, as you
   likely would for your ad text, simply enter a blank line between paragraphs.  The
   individual paragraphs may still be broken up over multiple lines for readability
   purposes as described in #3 above.   

5) If you enter something in one of the quiz-lander fields that does not make sense,
   then when you navigate to the quiz-lander in your browser, rather than seeing an 
   actual quiz-lander, you will instead be presented a list of the the errors encountered,
   so that you can make corrections and try again.
   
6) The quiz-lander template as is (with no changes made yet by you) will actually display
   a single error, indicating that the default Facebook Pixel Code template provided is just
   that, a template: you have to either fill in its blanks, replace it entirely with your
   own Facebook Pixel code, or remove the provided template (but remember, don't remove
   the bracketing lines!).

7) That's it!  After making your edits, the only thing you have to remember is to make
   sure that the image you specify to the quiz-lander has been uploaded into the same
   folder as the "index.php" file.
   