<?php

namespace Caxy;

/**
 * Class PostalCode
 */
class PostalCode
{
    /**
     * @param $postalCode
     *
     * @return string
     */
    public static function toState($postalCode)
    {
        $postalCode = (int) substr($postalCode, 0, 3);
        switch (true) {
            case ($postalCode >= 5 && $postalCode <= 5):
                return 'NY';

            case ($postalCode >= 6 && $postalCode <= 7):
                return 'PR';

            case ($postalCode >= 8 && $postalCode <= 8):
                return 'VI';

            case ($postalCode >= 9 && $postalCode <= 9):
                return 'PR';

            case ($postalCode >= 10 && $postalCode <= 27):
                return 'MA';

            case ($postalCode >= 28 && $postalCode <= 29):
                return 'RI';

            case ($postalCode >= 30 && $postalCode <= 38):
                return 'NH';

            case ($postalCode >= 39 && $postalCode <= 49):
                return 'ME';

            case ($postalCode >= 50 && $postalCode <= 54):
                return 'VT';

            case ($postalCode >= 55 && $postalCode <= 55):
                return 'MA';

            case ($postalCode >= 56 && $postalCode <= 59):
                return 'VT';

            case ($postalCode >= 60 && $postalCode <= 69):
                return 'CT';

            case ($postalCode >= 70 && $postalCode <= 89):
                return 'NJ';

            case ($postalCode >= 90 && $postalCode <= 99):
                return 'AE';

            case ($postalCode >= 100 && $postalCode <= 149):
                return 'NY';

            case ($postalCode >= 150 && $postalCode <= 196):
                return 'PA';

            case ($postalCode >= 197 && $postalCode <= 199):
                return 'DE';

            case ($postalCode >= 200 && $postalCode <= 200):
                return 'DC';

            case ($postalCode >= 201 && $postalCode <= 201):
                return 'VA';

            case ($postalCode >= 202 && $postalCode <= 205):
                return 'DC';

            case ($postalCode >= 206 && $postalCode <= 212):
                return 'MD';

            case ($postalCode >= 214 && $postalCode <= 219):
                return 'MD';

            case ($postalCode >= 220 && $postalCode <= 246):
                return 'VA';

            case ($postalCode >= 247 && $postalCode <= 266):
                return 'WV';

            case ($postalCode >= 247 && $postalCode <= 268):
                return 'WV';

            case ($postalCode >= 270 && $postalCode <= 289):
                return 'NC';

            case ($postalCode >= 290 && $postalCode <= 299):
                return 'SC';

            case ($postalCode >= 300 && $postalCode <= 319):
                return 'GA';

            case ($postalCode >= 320 && $postalCode <= 339):
                return 'FL';

            case ($postalCode >= 340 && $postalCode <= 340):
                return 'AA';

            case ($postalCode >= 341 && $postalCode <= 342):
                return 'FL';

            case ($postalCode >= 344 && $postalCode <= 344):
                return 'FL';

            case ($postalCode >= 346 && $postalCode <= 347):
                return 'FL';

            case ($postalCode >= 349 && $postalCode <= 349):
                return 'FL';

            case ($postalCode >= 350 && $postalCode <= 352):
                return 'AL';

            case ($postalCode >= 354 && $postalCode <= 369):
                return 'AL';

            case ($postalCode >= 370 && $postalCode <= 385):
                return 'TN';

            case ($postalCode >= 386 && $postalCode <= 397):
                return 'MS';

            case ($postalCode >= 398 && $postalCode <= 399):
                return 'GA';

            case ($postalCode >= 399 && $postalCode <= 399):
                return 'GA';

            case ($postalCode >= 400 && $postalCode <= 427):
                return 'KY';

            case ($postalCode >= 430 && $postalCode <= 459):
                return 'OH';

            case ($postalCode >= 460 && $postalCode <= 479):
                return 'IN';

            case ($postalCode >= 480 && $postalCode <= 499):
                return 'MI';

            case ($postalCode >= 500 && $postalCode <= 528):
                return 'IA';

            case ($postalCode >= 530 && $postalCode <= 532):
                return 'WI';

            case ($postalCode >= 534 && $postalCode <= 535):
                return 'WI';

            case ($postalCode >= 537 && $postalCode <= 549):
                return 'WI';

            case ($postalCode >= 550 && $postalCode <= 551):
                return 'MN';

            case ($postalCode >= 553 && $postalCode <= 566):
                return 'MN';

            case ($postalCode >= 567 && $postalCode <= 567):
                return 'ND';

            case ($postalCode >= 570 && $postalCode <= 577):
                return 'SD';

            case ($postalCode >= 580 && $postalCode <= 588):
                return 'ND';

            case ($postalCode >= 590 && $postalCode <= 599):
                return 'MT';

            case ($postalCode >= 600 && $postalCode <= 620):
                return 'IL';

            case ($postalCode >= 622 && $postalCode <= 629):
                return 'IL';

            case ($postalCode >= 630 && $postalCode <= 631):
                return 'MO';

            case ($postalCode >= 633 && $postalCode <= 641):
                return 'MO';

            case ($postalCode >= 644 && $postalCode <= 658):
                return 'MO';

            case ($postalCode >= 660 && $postalCode <= 662):
                return 'KS';

            case ($postalCode >= 664 && $postalCode <= 679):
                return 'KS';

            case ($postalCode >= 680 && $postalCode <= 681):
                return 'NE';

            case ($postalCode >= 683 && $postalCode <= 693):
                return 'NE';

            case ($postalCode >= 700 && $postalCode <= 701):
                return 'LA';

            case ($postalCode >= 703 && $postalCode <= 708):
                return 'LA';

            case ($postalCode >= 710 && $postalCode <= 714):
                return 'LA';

            case ($postalCode >= 716 && $postalCode <= 729):
                return 'AR';

            case ($postalCode >= 730 && $postalCode <= 731):
                return 'OK';

            case ($postalCode >= 733 && $postalCode <= 733):
                return 'TX';

            case ($postalCode >= 734 && $postalCode <= 741):
                return 'OK';

            case ($postalCode >= 743 && $postalCode <= 749):
                return 'OK';

            case ($postalCode >= 750 && $postalCode <= 799):
                return 'TX';

            case ($postalCode >= 800 && $postalCode <= 816):
                return 'CO';

            case ($postalCode >= 820 && $postalCode <= 831):
                return 'WY';

            case ($postalCode >= 832 && $postalCode <= 838):
                return 'ID';

            case ($postalCode >= 840 && $postalCode <= 847):
                return 'UT';

            case ($postalCode >= 850 && $postalCode <= 850):
                return 'AZ';

            case ($postalCode >= 852 && $postalCode <= 853):
                return 'AZ';

            case ($postalCode >= 855 && $postalCode <= 857):
                return 'AZ';

            case ($postalCode >= 859 && $postalCode <= 860):
                return 'AZ';

            case ($postalCode >= 863 && $postalCode <= 865):
                return 'AZ';

            case ($postalCode >= 870 && $postalCode <= 875):
                return 'NM';

            case ($postalCode >= 877 && $postalCode <= 884):
                return 'NM';

            case ($postalCode >= 885 && $postalCode <= 885):
                return 'TX';

            case ($postalCode >= 889 && $postalCode <= 891):
                return 'NV';

            case ($postalCode >= 893 && $postalCode <= 895):
                return 'NV';

            case ($postalCode >= 897 && $postalCode <= 898):
                return 'NV';

            case ($postalCode >= 900 && $postalCode <= 908):
                return 'CA';

            case ($postalCode >= 910 && $postalCode <= 928):
                return 'CA';

            case ($postalCode >= 930 && $postalCode <= 961):
                return 'CA';

            case ($postalCode >= 962 && $postalCode <= 966):
                return 'AP';

            case ($postalCode >= 967 && $postalCode <= 968):
                return 'HI';

            case ($postalCode >= 969 && $postalCode <= 969):
                return 'GU';

            case ($postalCode >= 970 && $postalCode <= 979):
                return 'OR';

            case ($postalCode >= 980 && $postalCode <= 986):
                return 'WA';

            case ($postalCode >= 988 && $postalCode <= 994):
                return 'WA';

            case ($postalCode >= 995 && $postalCode <= 999):
                return 'AK';

        }
    }
}
