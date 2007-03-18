# $Id: serbiancyrutf.perl 380 2004-10-18 18:17:48Z filip $
#
# serbiancyrutf.perl for serbiancyrutf babel, inspired heavily by german.perl
# by Ross Moore <ross@mpce.mq.edu.au>


package serbiancyrutf;

print " [serbiancyrutf]";

sub main'serbiancyrutf_translation { @_[0] }


package main;

if (defined &addto_languages) { &addto_languages('serbiancyrutf') };

sub serbiancyrutf_titles {
    $toc_title = "Садржај";
    $lof_title = "Списак слика";
    $lot_title = "Списак табела";
    $idx_title = "Индекс";
    $ref_title = "Литература";
    $bib_title = "Библиографија";
    $abs_title = "Апстракт";
    $app_title = "Додатак";
    $pre_title = "Предговор";
    $foot_title = "Фусноте";
    $thm_title = "Теорема";
    $fig_name = "Слика";
    $tab_name = "Табела";
    $prf_name = "Доказ";
    $date_name = "Датум";
    $page_name = "Страна";
  #  Sectioning-level titles
    $part_name = "Део";
    $chapter_name = "Поглавље";
    $section_name = "Одељак";
    $subsection_name = "Пододељак";
    $subsubsection_name = "Трећи одељак";
    $paragraph_name = "Пасус";
  #  Misc. strings
    $child_name = "Пододељци";
    $info_title = "О овом документу";
    $also_name = "видети такође";
    $see_name = "Видети";
  #  names in navigation panels
    $next_name = "Следећи";
    $up_name = "Горе";
    $prev_name = "Претходни";
  #  field names in email headers
    $encl_name = "прил";
    $headto_name = "За";
    $cc_name = "Кп";

    @Month = ('', 'Јануар', 'Фебруар', 'Март', 'Април', 'Мај',
	      'Јун', 'Јул', 'Август', 'Септембар', 'Октобар',
	      'Новембар', 'Децембар');
    $GENERIC_WORDS = "";
}


sub serbiancyrutf_today {
    local($today) = &get_date();
    $today =~ s|(\d+)/0?(\d+)/|$2 $Month[$1] |;
    join('',$today,$_[0]);
}



# use'em
&serbiancyrutf_titles;
$default_language = 'serbiancyrutf';
$TITLES_LANGUAGE = 'serbiancyrutf';
$serbiancyrutf_encoding = 'utf-8';

# $Log$
# Revision 1.1  2004/10/18 18:17:49  filip
# Initial revision
#
# Revision 1.1  1998/08/25 02:11:25  RRM
# 	Babel language support
#
#

1;
