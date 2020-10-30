<?php
   /**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
printf("Input size (m n p): ");
fscanf(STDIN,"%d%d%d",$m,$n,$p);
printf("\n");

printf("Input matrix A(%d x %d):\n",$m,$n);
for($i0=1;$i0<=$n;$i0++)
$n_formal .= "%d";
for($i2=0;$i2<$m;$i2++){
    $matrixA[$i2]=fscanf(STDIN,$n_formal);
}printf("\n");

printf("Input matrix B(%d x %d):\n",$n,$p);
for($i1=1;$i1<=$p;$i1++)
$p_formal .= "%d";
for($i3=0;$i3<$n;$i3++){
    $matrixB[$i3]=fscanf(STDIN,$p_formal);
}printf("\n");

printf("The result matrix C(%d x %d):\n",$m,$p);
for ($i4=0;$i4<$p;$i4++){
    for($i5=0;$i5<$m;$i5++){
        for($i6=0;$i6<$n;$i6++){
        $result_matrix[$i5][$i4]+=$matrixA[$i5][$i6]*$matrixB[$i6][$i4];
    }}
}

for ($i7=0;$i7<count($result_matrix);$i7++){
    for ($i8=0;$i8<count($result_matrix[$i7]);$i8++)
{
    printf("%5d",$result_matrix[$i7][$i8]);
}printf("\n");}