<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
printf("Input size (n >= 1): ");
fscanf(STDIN,"%d",$size);
printf("\n");
for($i=0;$i<$size;$i++){
    for($j=0;$j<$size;$j++){
        if ($i==0 || $j==0){
            $array[$i][$j]=1;
            printf("%4d",$array[$i][$j]);
        }
        else {
            if ($i+$j>=$size)
                printf("");
            else {
                $array[$i][$j]=$array[$i-1][$j]+$array[$i][$j-1];
            printf("%4d",$array[$i][$j]);
            }}
    }
    printf("\n\n");
}
