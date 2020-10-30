<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
    printf("Input number of students: ");
    fscanf(STDIN, "%d\n",$stunum);
    printf("Input number of chapters: ");
    fscanf(STDIN,"%d\n",$chanum);
    $format="%s";
    for ($i0=0;$i0<$chanum;$i0++){
        $chapter .= " chpt".($i0+1);
        $format .="%f";}
    for($i1=0;$i1<$stunum;$i1++){
    printf("student %2d score (name%s ): ",$i1+1,$chapter);
    $name_score_mix[$i1]=fscanf(STDIN,$format);
}

    printf("\n");
    printf("Result:\n");
    $space0="";
    printf("%11s",$space);
    for($i2=1;$i2<=$chanum;$i2++){
        printf("%7d",$i2);}
        printf("\n");
    $repeatnum=11+7*$chanum+9;
    $repeatcon="-";
    // using str_repeat is great, good job.
    echo str_repeat($repeatcon,$repeatnum);
    printf("\n");

    for ($i3=0;$i3<$stunum;$i3++){
        printf("%-10s:",$name_score_mix[$i3][0]);
        $total=0;
        for ($i4=1;$i4<=$chanum;$i4++){
        $total+=$name_score_mix[$i3][$i4];
        printf("%7.2f",$name_score_mix[$i3][$i4]);
        }
        printf(" =");
        printf("%7.2f\n",$total);
    }


