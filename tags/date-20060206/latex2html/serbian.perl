# $Id: serbian.perl 380 2004-10-18 18:17:48Z filip $
#
# serbian.perl for serbian babel, inspired heavily by german.perl
# by Ross Moore <ross@mpce.mq.edu.au>


package serbian;

print " [serbian]";

sub main'serbian_translation { @_[0] }


package main;

if (defined &addto_languages) { &addto_languages('serbian') };

sub serbian_titles {
    $toc_title = "Sadržaj";
    $lof_title = "Spisak slika";
    $lot_title = "Spisak tabela";
    $idx_title = "Indeks";
    $ref_title = "Literatura";
    $bib_title = "Bibliografija";
    $abs_title = "Apstrakt";
    $app_title = "Dodatak";
    $pre_title = "Predgovor";
    $foot_title = "Fusnote";
    $thm_title = "Teorema";
    $fig_name = "Slika";
    $tab_name = "Tabela";
    $prf_name = "Dokaz";
    $date_name = "Datum";
    $page_name = "Strana";
  #  Sectioning-level titles
    $part_name = "Deo";
    $chapter_name = "Poglavlje";
    $section_name = "Odeljak";
    $subsection_name = "Pododeljak";
    $subsubsection_name = "Treći odeljak";
    $paragraph_name = "Pasus";
  #  Misc. strings
    $child_name = "Pododeljci";
    $info_title = "O ovom dokumentu";
    $also_name = "videti takođe";
    $see_name = "Videti";
  #  names in navigation panels
    $next_name = "Sledeći";
    $up_name = "Gore";
    $prev_name = "Prethodni";
  #  field names in email headers
    $encl_name = "pril";
    $headto_name = "Za";
    $cc_name = "Kp";

    @Month = ('', 'Januar', 'Februar', 'Mart', 'April', 'Maj',
	      'Jun', 'Jul', 'Avgust', 'Septembar', 'Oktobar',
	      'Novembar', 'Decembar');
    $GENERIC_WORDS = "";
}


sub serbian_today {
    local($today) = &get_date();
    $today =~ s|(\d+)/0?(\d+)/|$2 $Month[$1] |;
    join('',$today,$_[0]);
}



# use'em
&serbian_titles;
$default_language = 'serbian';
$TITLES_LANGUAGE = 'serbian';
$serbian_encoding = 'utf-8';

# $Log$
# Revision 1.1  2004/10/18 18:17:49  filip
# Initial revision
#
# Revision 1.1  1998/08/25 02:11:25  RRM
# 	Babel language support
#
#

1;
