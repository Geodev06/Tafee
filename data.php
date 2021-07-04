<?php

require_once __DIR__ . '/vendor/autoload.php';

function Xvalues()
{
    $data = [
        [0, 0], [1, 1], [2, 10], [4.5, 1], [5, 1], [5.2, 1], [5.9, 1], [6, 1], [7, 1], [7.5, 1],
        [8, 1], [10, 2], [11, 3], [12, 1], [13, 1], [14, 1], [15, 1], [16, 1], [19, 1], [20, 1],
        [21, 1], [22, 1], [23, 1], [24, 4], [24, 1], [24, 2], [25, 1], [25, 6], [25.1, 1], [25.1, 1],
        [26, 1], [27.1, 1], [28.1, 1], [29.1, 1], [30, 1], [31, 1], [32, 1], [33, 1], [34, 1], [34, 2],
        [35, 1], [35.9, 1], [35.8, 1], [35.1, 1], [35.4, 1], [35, 1], [35, 1], [35, 1], [35, 1], [36, 1],
        [35, 1], [35.9, 1], [35.8, 1], [35.1, 1], [35.4, 1], [35, 1], [35, 1], [35, 1], [35, 1], [36, 1],
        [36, 1], [36.9, 1], [36.8, 1], [37.1, 1], [40.4, 1], [32, 1], [41, 1], [42, 1], [45, 1], [32.3, 1],
        [41, 1], [41.9, 1], [45.8, 1], [50.1, 1], [51.4, 1], [39, 1], [33, 1], [45, 1], [45, 1], [44.3, 1],
        [46, 1], [41.6, 1], [55.8, 1], [60.1, 1], [58.4, 1], [55, 1], [78, 1], [45, 1], [40, 1], [54.1, 1],
        [50, 1], [51.6, 1], [50.8, 1], [50.1, 1], [52.4, 1], [56, 1], [51, 1], [52, 1], [30, 1], [53.6, 1],
        [10, 1], [11, 1], [9, 1], [9.5, 1], [10, 1], [11, 1], [10.5, 1], [11.1, 1], [8.8, 1], [8.8, 1],
        [6, 1], [5, 1], [2, 1], [5.5, 1], [3, 1], [1, 1], [5, 1], [3.1, 1], [7.5, 1], [8.3, 1],
        [5, 1], [3, 1], [1, 1], [1.5, 1], [8, 1], [7, 1], [8, 1], [9.1, 1], [10.5, 1], [9.3, 1],
        [5, 1], [3, 1], [1, 1], [1.5, 1], [8, 1], [7, 1], [8, 1], [9.1, 1], [10.5, 1], [9.3, 1],
        [6, 1], [6, 1], [6, 1], [8.5, 1], [8, 1], [6, 1], [10, 1], [9, 1], [10.9, 1], [7, 1],
        [16, 1], [16, 1], [17, 1], [15, 1], [18, 1], [16, 1], [17, 1], [19, 1], [17, 1], [17, 1],
        [17, 1], [17, 1], [17, 1], [12, 1], [15, 1], [15, 1], [15, 1], [20, 1], [18, 1], [18, 1],
        [17.6, 1], [17.1, 1], [17.1, 1], [14, 1], [15, 1], [18, 1], [12, 1], [21, 1], [21, 1], [22, 1],
        [30, 1], [26, 1], [27.1, 1], [24, 1], [25, 1], [35, 1], [32, 1], [34, 1], [35, 1], [35, 1],
        [29, 1], [21, 1], [27.1, 1], [24, 1], [24, 1], [32, 1], [34, 1], [34, 1], [35, 1], [35, 1],
        [28, 1], [29, 1], [29.1, 1], [29, 1], [29, 1], [29, 1], [25, 1], [21, 1], [18, 1], [17, 1],
        [0, 1], [23, 1], [23, 2], [23, 4], [23, 1], [24, 1], [24, 1], [24, 1], [24, 1], [24, 1],
        [1, 1], [23.5, 1], [24, 2], [25, 4], [25, 1], [25, 1], [22, 1], [22, 1], [26, 1], [28, 1],
        [1, 1], [23, 1], [23, 2], [23, 4], [23, 1], [24, 1], [24, 1], [24, 1], [24, 1], [24, 1],
        [1, 4], [23.7, 1], [23.7, 2], [23.7, 4], [23.5, 1], [24.9, 1], [24.4, 1], [24.9, 1], [24.3, 1], [24.9, 1],
        [1, 5], [22, 1], [22.7, 2], [22.7, 4], [21.5, 1], [25, 1], [24.9, 1], [26, 1], [26, 1], [24, 1],
        [7.1, 5], [7.5, 2], [7, 8], [7, 1], [7.9, 1], [7.6, 1], [9.1, 1], [8.1, 1], [8.1, 1], [7.1, 1],
        [7.1, 5], [7.5, 2], [7, 8], [7, 8], [7.9, 8], [7.6, 8], [9.1, 8], [8.1, 8], [8.1, 8], [7.1, 8],
        [7.1, 1], [7.5, 1], [7, 1], [7, 1], [7.9, 1], [7.2, 1], [9.1, 1], [8.1, 1], [8.1, 1], [7.1, 1],
        [8.1, 2], [8.5, 2], [8, 2], [8, 2], [8.9, 2], [7.8, 2], [9, 2], [8.1, 2], [8.9, 2], [8, 2],
        [9.1, 2], [9.5, 2], [9, 2], [9, 2], [9.9, 2], [9.8, 2], [9, 2], [9.1, 2], [9.9, 2], [9, 2],
        [1.3, 5], [1.4, 5], [1.6, 5], [1.1, 5], [1.3, 5], [1.6, 5], [1.9, 5], [2, 5], [2.5, 5], [1.9, 5],
        [1.5, 4], [1.2, 4], [1.6, 4], [1.9, 4], [1.1, 4], [1.5, 4], [1.8, 4], [1.9, 4], [1.9, 4], [1.4, 4],
        [1.3, 5], [1.4, 5], [1.6, 5], [1.1, 5], [1.3, 5], [1.6, 5], [1.9, 5], [2, 5], [2.5, 5], [1.9, 5],
        [1.5, 4], [1.2, 4], [1.6, 4], [1.9, 4], [1.1, 4], [1.5, 4], [1.8, 4], [1.9, 4], [1.9, 4], [1.4, 4],
        [9.1, 2], [9.5, 2], [9, 2], [9, 2], [9.9, 2], [9.8, 2], [9, 2], [9.1, 2], [9.9, 2], [9, 2],
        [1.3, 5], [1.4, 5], [1.6, 5], [1.1, 5], [1.3, 5], [1.6, 5], [1.9, 5], [2, 5], [2.5, 5], [1.9, 5],
        [1.5, 4], [1.2, 4], [1.6, 4], [1.9, 4], [1.1, 4], [1.5, 4], [1.8, 4], [1.9, 4], [1.9, 4], [1.4, 4],
        [1.3, 5], [1.4, 5], [1.6, 5], [1.1, 5], [1.3, 5], [1.6, 5], [1.9, 5], [2, 5], [2.5, 5], [1.9, 5],
        [1.5, 4], [1.2, 4], [1.6, 4], [1.9, 4], [1.1, 4], [1.5, 4], [1.8, 4], [1.9, 4], [1.9, 4], [1.4, 4],
        [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1], [2.7, 1],
        [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2], [2.7, 2],
        [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3], [3.1, 3],
        [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1], [4.6, 1],
        [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2], [4.6, 2],
        [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3], [4.6, 3],
        [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4], [4.6, 4],
        [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1], [5.6, 1],
        [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2], [5.6, 2],
        [6, 3], [6, 3], [6, 3], [6, 3], [6, 3], [6, 3], [6, 3], [6, 3], [6, 3], [6, 3],
        [1.9, 1], [1.9, 1], [1.9, 1], [1.9, 1], [1.5, 1], [1.5, 1], [1.5, 1], [1.5, 1], [1.5, 1], [1.5, 1],
        [1.9, 2], [1.8, 2], [1.8, 2], [1.8, 2], [1.8, 2], [1.8, 2], [1.8, 2], [1.8, 2], [1.8, 2], [1.8, 2],
        [1.9, 3], [1.6, 3], [1.6, 3], [1.6, 3], [1.6, 3], [1.6, 3], [1.6, 3], [1.6, 3], [1.6, 3], [1.6, 3],
        [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4], [2.3, 4],
        [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5], [2.5, 5],
        [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1], [3.4, 1],
        [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2], [3.2, 2],
        [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3], [3.9, 3],
        [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4], [3.6, 4],
        [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5], [3.1, 5],
        [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1], [4.9, 1],
        [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2], [4.5, 2],
        [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3], [4.1, 3],
        [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1], [5.8, 1],
        [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2], [5.5, 2],
        [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3], [6.3, 3],
        [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1], [12.1, 1],
        [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1], [13.1, 1],
        [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2], [13.5, 2],
        [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3], [13.6, 3],
        [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4], [14.5, 4],
        [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1], [21.1, 1],
        [23.1, 1], [23.1, 1], [23.2, 1], [23.3, 1], [23.4, 1], [23.5, 1], [23.6, 1], [23.7, 1], [23.8, 1], [23.9, 1],
        [21.1, 3], [22.1, 3], [23.1, 3], [24.1, 3], [20.1, 3], [21.1, 3], [21.1, 3], [21.1, 3], [21.1, 3], [21.1, 3],
        [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1], [32.2, 1],
        [32.2, 2], [30.9, 2], [34.2, 2], [32.9, 2], [32.9, 2], [32.2, 2], [32.2, 2], [31.5, 2], [32.9, 2], [32.5, 2],
        [35.2, 3], [35.9, 3], [35.8, 3], [34.2, 3], [37.2, 3], [39.2, 3], [33.2, 3], [37.2, 3], [36.2, 3], [34.2, 3],
        [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4], [35.2, 4],
        [32.2, 5], [32.2, 5], [32.2, 5], [34.2, 5], [33.2, 5], [35.2, 5], [33.2, 5], [31.2, 5], [32.5, 5], [32.9, 5],
        [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1], [40.1, 1],
        [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2], [40.1, 2],
        [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3], [40.1, 3],
        [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4], [40.1, 4],
        [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5], [42.1, 5],
        [25, 1], [25, 1], [25, 1], [25, 1], [25, 1], [25, 1], [25, 1], [25, 1], [25, 1], [25, 1],
        [25, 2], [25, 2], [25, 2], [25, 2], [25, 2], [25, 2], [25, 2], [25, 2], [25, 2], [25, 2],
        [25, 3], [25, 3], [25, 3], [25, 3], [25, 3], [25, 3], [25, 3], [25, 3], [25, 3], [25, 3],
        [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1], [14.1, 1],
        [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2], [14.3, 2],
        [15.3, 3], [15.3, 3], [15.3, 3], [15.3, 3], [15.2, 3], [15.7, 3], [15.3, 3], [15.3, 3], [15.6, 3], [15.9, 3],
        [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1], [16.5, 1],
        [16.5, 2], [16.5, 2], [16.5, 2], [16.2, 2], [16.7, 2], [16.7, 2], [16.5, 2], [16.5, 2], [16.5, 2], [16.9, 2],
        [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1], [28.3, 1],
        [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1], [27.3, 1],
        [27.9, 1], [27.9, 1], [27.9, 1], [27.9, 1], [27.9, 1], [26.9, 1], [26.9, 1], [26.9, 1], [26.9, 1], [26.9, 1],
        [29, 1], [29, 1], [29, 1], [29, 1], [29, 1], [29, 1], [29, 1], [29, 1], [29, 1], [29, 1],
        [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2], [29.5, 2],
        [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1], [46.1, 1],
        [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1], [47.1, 1],
        [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1], [48.1, 1],
        [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1], [49.1, 1],
        [45, 1], [45, 1], [45, 1], [45, 1], [45, 1], [45, 1], [45, 1], [45, 1], [45, 1], [45, 1],
        [44, 1], [44, 1], [44, 1], [44, 1], [44, 1], [44, 1], [44, 1], [44, 1], [44, 1], [44, 1],
        [61.5, 1], [62.5, 1], [63.5, 1], [64.5, 1], [65.5, 1], [66.5, 1], [67.5, 1], [68.5, 1], [69.5, 1], [71.5, 1],
        [60.5, 1], [68.9, 1], [63.8, 1], [62.5, 1], [67.5, 1], [66.5, 1], [67.5, 1], [68.5, 1], [68.9, 1], [71.9, 1],
        [52, 1], [50, 1], [52, 1], [53, 1], [54, 1], [55, 1], [56, 1], [57, 1], [58, 1], [59, 1],
        [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2], [53.6, 2],
        [65, 1], [65, 1], [65, 1], [65, 1], [65, 1], [65, 1], [65, 1], [65, 1], [65, 1], [65, 1],
        [65, 2], [65, 2], [65, 2], [65, 2], [65, 2], [65, 2], [65, 2], [65, 2], [65, 2], [65, 2],
        [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1], [45.5, 1],
        [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2], [45.5, 2],

        [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1],
        [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1], [77, 1],
        [77, 2], [77, 2], [77, 2], [77, 2], [77, 2], [77, 2], [77, 2], [77, 2], [77, 2], [77, 2],
        [78, 3], [78, 3], [78, 3], [78, 3], [78, 3], [78, 3], [78, 3], [78, 3], [78, 3], [78, 3],
        [60, 1], [60, 1], [60, 1], [60, 1], [60, 1], [60, 1], [60, 1], [60, 1], [60, 1], [60, 1],
    ];
    return $data;
}
function Yvalues()
{
    $data = [
        0, 5, 16, 16, 16, 15, 13, 15, 12, 20,
        20.1, 46, 75, 26, 27, 29, 31, 32, 35, 37,
        38, 39, 40, 160, 41, 82, 41, 42, 42.3, 45,
        46, 47, 48, 49, 50, 51, 52, 53, 54, 54,
        54, 23, 56, 78, 45, 55, 50, 45, 60, 60,
        80, 123, 50, 68, 42, 155, 100, 145, 160, 90,
        80, 81, 85, 88, 62, 78, 99, 125, 88, 97,
        75, 76, 83, 98, 92, 95, 83, 100, 120, 115,
        90, 86, 63, 128, 102, 95, 158, 80, 110, 111,
        90, 95, 91, 92, 90, 85, 85, 87, 55, 90,
        20, 18, 26, 30, 20, 20, 21, 25, 25, 24,
        18, 12, 15, 15, 10, 10, 15, 15, 25, 10,
        21, 20, 20, 15, 25, 25, 25, 30, 25, 24,
        22, 25, 22, 10, 20, 28, 35, 30, 30, 25,
        20, 25, 20, 15, 25, 30, 31, 30, 30, 20,
        50, 45, 45, 50, 40, 45, 42, 50, 55, 60,
        50, 55, 55, 60, 40, 40, 40, 45, 55, 40,
        52, 55, 50, 45, 50, 50, 60, 65, 55, 60,
        52, 55, 50, 45, 50, 50, 60, 65, 55, 60,
        51, 100, 150, 120, 90, 70, 68, 61, 50, 60,
        41, 45, 50, 135, 50, 50, 61, 31, 35, 35,
        0, 78, 150, 300, 75, 78, 78, 78, 80, 80,
        15, 75, 140, 320, 80, 80, 80, 80, 82, 83,
        18, 85, 145, 310, 85, 85, 85, 85, 85, 84,
        60, 90, 155, 280, 82, 83, 81, 83, 82, 80,
        70, 90, 170, 290, 81, 85, 90, 89, 80, 75,
        125, 50, 200, 25, 25, 25, 25, 25, 25, 25,
        125, 50, 200, 200, 200, 200, 200, 200, 200, 200,
        25, 25, 25, 25, 25, 25, 25, 25, 25, 25,
        50, 50, 50, 50, 50, 50, 50, 50, 50, 50,
        60, 60, 60, 60, 60, 60, 60, 60, 60, 60,
        65, 65, 65, 65, 65, 65, 65, 65, 65, 65,
        52, 52, 52, 52, 52, 52, 52, 52, 52, 52,
        100, 100, 100, 95, 95, 95, 95, 95, 95, 95,
        80, 80, 80, 80, 85, 82, 82, 82, 82, 82,
        60, 60, 60, 60, 60, 60, 60, 60, 60, 60,
        65, 65, 65, 65, 65, 65, 65, 65, 65, 65,
        52, 52, 52, 52, 52, 52, 52, 52, 52, 52,
        100, 100, 100, 95, 95, 95, 95, 95, 95, 95,
        80, 80, 80, 80, 85, 82, 82, 82, 82, 82,
        15, 15, 15, 15, 15, 15, 15, 15, 15, 15,
        30, 30, 30, 30, 30, 30, 30, 30, 30, 30,
        45, 45, 45, 45, 45, 45, 45, 45, 45, 45,
        20, 20, 20, 20, 20, 20, 20, 20, 20, 20,
        41, 42, 43, 44, 45, 46, 47, 48, 49, 50,
        60, 60, 60, 60, 60, 60, 60, 60, 60, 60,
        80, 80, 80, 80, 80, 80, 80, 80, 80, 80,
        30, 30, 30, 30, 30, 30, 30, 30, 30, 30,
        55, 55, 55, 55, 55, 55, 55, 55, 55, 55,
        50, 50, 50, 50, 50, 50, 50, 50, 50, 50,
        10, 10, 10, 10, 10, 10, 10, 10, 10, 10,
        20, 20, 20, 20, 20, 20, 20, 20, 20, 20,
        30, 30, 30, 30, 30, 33, 33, 33, 33, 33,
        40, 40, 40, 40, 40, 44, 44, 44, 44, 44,
        55, 55, 55, 55, 55, 55, 60, 60, 60, 60,
        20, 20, 20, 20, 20, 20, 20, 20, 20, 20,
        23, 23, 23, 23, 23, 25, 25, 25, 25, 25,
        26, 26, 26, 26, 26, 26, 24, 24, 24, 24,
        20, 20, 20, 20, 25, 25, 25, 25, 25, 25,
        20, 20, 20, 20, 20, 20, 20, 20, 20, 20,
        20, 20, 20, 20, 20, 20, 20, 20, 20, 20,
        22, 22, 22, 22, 22, 22, 22, 22, 22, 22,
        23, 23, 23, 23, 23, 23, 23, 23, 23, 23,
        23, 23, 23, 23, 23, 23, 23, 23, 23, 23,
        24, 24, 24, 24, 24, 25, 25, 25, 25, 25,
        27, 27, 27, 27, 27, 27, 27, 27, 27, 27,
        30, 30, 33, 32, 32, 36, 30, 31, 32, 34,
        30, 30, 30, 30, 30, 30, 30, 30, 30, 30,
        60, 60, 60, 60, 60, 60, 60, 60, 60, 60,
        95, 95, 95, 95, 95, 95, 95, 95, 95, 95,
        125, 130, 130, 130, 130, 130, 130, 130, 130, 130,
        50, 50, 50, 50, 50, 50, 50, 50, 50, 50,
        50, 50, 50, 50, 50, 50, 50, 50, 50, 50,
        100, 100, 100, 100, 100, 100, 100, 100, 100, 100,
        80, 80, 80, 80, 80, 80, 80, 80, 80, 80,
        90, 90, 90, 90, 90, 90, 90, 90, 90, 90,
        100, 100, 100, 100, 100, 100, 100, 100, 100, 100,
        110, 110, 110, 110, 110, 110, 110, 110, 110, 110,
        110, 110, 110, 110, 110, 110, 110, 110, 110, 110,
        120, 120, 120, 120, 120, 120, 120, 120, 120, 120,
        120, 120, 120, 120, 120, 130, 130, 130, 130, 130,
        140, 140, 140, 140, 140, 140, 140, 140, 140, 140,
        140, 140, 140, 140, 150, 155, 150, 145, 140, 140,
        160, 160, 160, 160, 160, 160, 120, 120, 120, 180,
        100, 111, 112, 109, 108, 111, 115, 110, 102, 105,
        150, 150, 150, 150, 150, 150, 150, 150, 150, 150,
        170, 170, 170, 170, 170, 170, 170, 170, 170, 170,
        70, 70, 70, 70, 70, 70, 70, 70, 70, 70,
        85, 85, 85, 85, 85, 85, 85, 85, 85, 85,
        110, 110, 110, 110, 120, 130, 110, 120, 120, 120,
        90, 90, 90, 90, 90, 95, 92, 94, 96, 98,
        85, 85, 85, 85, 85, 85, 85, 85, 85, 85,
        110, 110, 110, 110, 110, 115, 115, 115, 115, 115,
        120, 120, 120, 120, 120, 120, 125, 125, 125, 125,
        125, 125, 125, 125, 130, 130, 130, 130, 130, 130,
        135, 135, 135, 135, 135, 140, 140, 140, 140, 145,
        180, 180, 180, 180, 180, 170, 170, 170, 170, 170,
        110, 110, 110, 110, 110, 112, 112, 112, 112, 112,
        115, 112, 112, 112, 116, 118, 120, 120, 120, 121,
        100, 100, 100, 100, 100, 100, 100, 100, 100, 100,
        130, 130, 130, 130, 130, 133, 133, 133, 133, 133,
        80, 80, 80, 80, 80, 80, 80, 85, 85, 85,
        80, 85, 75, 75, 75, 75, 75, 75, 75, 75,
        100, 100, 100, 100, 100, 110, 110, 110, 110, 110,
        150, 180, 150, 158, 156, 120, 158, 157, 153, 155,
        150, 180, 150, 158, 156, 120, 158, 157, 153, 155,
        200, 212, 211, 220, 220, 240, 240, 230, 220, 210,
        180, 181, 182, 183, 184, 180, 180, 180, 180, 180,
        320, 320, 320, 320, 320, 320, 320, 320, 320, 320,
        100, 100, 100, 100, 100, 100, 100, 100, 100, 100,
        200, 200, 200, 200, 200, 200, 200, 200, 200, 200,
        200, 200, 200, 200, 200, 200, 200, 200, 200, 200,
        250, 210, 200, 200, 200, 200, 200, 200, 200, 200,
        260, 260, 260, 260, 260, 260, 260, 260, 260, 260,
        260, 260, 260, 260, 260, 260, 260, 260, 260, 260,
        210, 210, 210, 210, 210, 210, 210, 210, 210, 210,
    ];
    return $data;
}
function getNumberofPersonandPrice()
{
    $sample = Xvalues();
    $target = Yvalues();

    $data = [];
    for ($i = 0; $i < count($sample); $i++) {
        array_push($data, [
            'x' => $sample[$i][1],
            'y' => $target[$i]
        ]);
    }
    return json_encode($data);
}
function getKilometersandPrice()
{
    $sample = Xvalues();
    $target = Yvalues();

    $data = [];
    for ($i = 0; $i < count($sample); $i++) {
        array_push($data, [
            'x' => $sample[$i][0],
            'y' => $target[$i]
        ]);
    }
    return json_encode($data);
}

$samp = [];
$targ = [];
