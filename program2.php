<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
printf("Input data (floor n): ");
fscanf(STDIN,"%d%d",$floor,$zone);
for ($i0=0;$i0<$floor;$i0++){
printf("Floor: %d\n",$i0+1);
for ($i1=0;$i1<$zone;$i1++){
     for($i2=0;$i2<$zone;$i2++){
     printf("    Input number of people in zone %d-%d: ",$i1+1,$i2+1);
     fscanf(STDIN,"%d\n",$floor_zone[$i0][$i1][$i2]);
}}}

printf("\n");
printf("People on each floor:\n");

for ($i3=0;$i3<$floor;$i3++){
     printf("  floor%3d:\n",$i3+1);
     $total_floor=0;
     for ($i4=0;$i4<$zone;$i4++){
          printf("    ");
          for ($i5=0;$i5<$zone;$i5++){
               printf("%4d",$floor_zone[$i3][$i4][$i5]);
               $total_floor+=$floor_zone[$i3][$i4][$i5];
          }
          printf("\n");
     }
     printf("    Number of people = %d\n",$total_floor);
}

printf("People on each zone:\n");
// using numerical variable will confusion later.
// try to reuse variable or just specify the meaningful name to them.
for ($i6=0;$i6<$zone;$i6++){
     for ($i7=0;$i7<$zone;$i7++){
          printf("  zone %d-%d:\n",$i6+1,$i7+1);
          $total_zone=0;
          for($i8=$floor-1;$i8>=0;$i8--){
printf("%8d\n",$floor_zone[$i8][$i6][$i7]);
$total_zone+=$floor_zone[$i8][$i6][$i7];
          }
          printf("    Number of people = %d\n",$total_zone);
     }
}