window.onload = function () {
    var can = document.getElementById('can');
    var clearButton = document.getElementById('clean');
    var Active_Status = false;
    var start_Coord = null;
    var end_Coord = null;
    var context = can.getContext('2d');
    var store_all = [];
    var temp = false;
    var DTI = 0;
    var rand_colo = null;
    var chan_Dist = {
        x: 0,
        y: 0
    };

    can.addEventListener('dblclick', function (evt) {
        document.getElementById("dis").innerHTML = "HIT";
        var Pos = getMousePos(can, evt);
        store_all.forEach(function (value) {

            var Ar0 = search_area(value[0][0], value[0][1], value[1][0], value[1][1], value[2][0], value[2][1]);
            var Ar1 = search_area(value[0][0], value[0][1], Pos.x, Pos.y, value[2][0], value[2][1]);
            var Ar2 = search_area(value[0][0], value[0][1], value[1][0], value[1][1], Pos.x, Pos.y);
            var Ar3 = search_area(Pos.x, Pos.y, value[1][0], value[1][1], value[2][0], value[2][1]);
            if (Math.round(Ar0) === Math.round(Ar1 + Ar2 + Ar3)) {
                var new_arr = [];
                var item_status = store_all[store_all.indexOf(value)];
                store_all.forEach(function (value2) {

                    if (value2 !== item_status) {
                        new_arr.push(value2);
                    }
                });

                store_all = new_arr;
                Clear();
                store_all.forEach(function (value2) {
                    re_dra_Tri(value2[0][0], value2[0][1], value2[4], value2[3]);
                });

                return true;
            }
        });

        Active_Status = false;
    });

    can.addEventListener('mousedown', function (evt) {

        can.style.cursor = 'move';
        evt.preventDefault();
        var mosPos = getMousePos(can, evt);
        start_Coord = mosPos;
        end_Coord = mosPos;
        Active_Status = true;
        temp = check_inside(mosPos);
        start_Coord = mosPos;
        end_Coord = mosPos;
        rand_colo = color_pattern_random();

        if (store_all.length > 0) {
            chan_Dist.x = store_all[DTI][0][0] - mosPos.x;
            chan_Dist.y = store_all[DTI][0][1] - mosPos.y;
        }
        console.log(chan_Dist);
    });
    can.addEventListener('mousemove', function (evt) {
        end_Coord = getMousePos(can, evt);
        if (Active_Status && temp) {
            Clear();
            can.style.cursor = 'ne-resize';
            re_dra_Tri(start_Coord.x, start_Coord.y, CLD(start_Coord.x, start_Coord.y, end_Coord.x, end_Coord.y), rand_colo);
            store_all.forEach(function (value) {
                re_dra_Tri(value[0][0], value[0][1], value[4], value[3]);
            });
        }

        else if (Active_Status) {
            can.style.cursor = 'crosshair';
            Clear();
            var item_status = store_all[DTI];
            var diffX = end_Coord.x - item_status[0][0] + chan_Dist.x;
            var diffY = end_Coord.y - item_status[0][1] + chan_Dist.y;
            item_status[0][0] += diffX;
            item_status[0][1] += diffY;
            item_status[1][0] += diffX;
            item_status[1][1] += diffY;
            item_status[2][0] += diffX;
            item_status[2][1] += diffY;
            re_dra_Tri(item_status[0][0], item_status[0][1], item_status[4], item_status[3]);
            store_all.forEach(function (value) {

                if (value[0][0] !== start_Coord.x && value[0][1] !== start_Coord.y) {
                    re_dra_Tri(value[0][0], value[0][1], value[4], value[3]);
                }
            });
        }
    }, true);

    can.addEventListener('mouseup', function (evt) {
        can.style.cursor = 'pointer';
        var mosPos = getMousePos(can, evt);

        if (!temp) {
            Active_Status = false;
            temp = false;
            dDT(mosPos.x, mosPos.y);
        }

        else if (Active_Status && CLD(start_Coord.x, start_Coord.y, end_Coord.x, end_Coord.y) > 2) {
            Active_Status = false;
            temp = false;
            end_Coord = mosPos;
            Draw_Tri(1, start_Coord.x, start_Coord.y, end_Coord.x, end_Coord.y);
        }
    });
    clearButton.addEventListener('click', function () {
        store_all = [];
        Clear();
    });
    const check_inside = (pos) => {

        temp = true;
        store_all.forEach(function (value) {
            var Area = search_area(value[0][0], value[0][1], value[1][0], value[1][1], value[2][0], value[2][1]);
            var Ar1 = search_area(value[0][0], value[0][1], pos.x, pos.y, value[2][0], value[2][1]);
            var Ar2 = search_area(value[0][0], value[0][1], value[1][0], value[1][1], pos.x, pos.y);
            var Ar3 = search_area(pos.x, pos.y, value[1][0], value[1][1], value[2][0], value[2][1]);

            if (Math.round(Area) === Math.round(Ar1 + Ar2 + Ar3)) {
                DTI = store_all.indexOf(value);
                temp = false;
                return true;
            }
        });
        return temp;
    }

    const search_area = (x1, y1, x2, y2, x3, y3) => {

        return Math.abs((x1 * (y2 - y3) + x2 * (y3 - y1) + x3 * (y1 - y2)) / 2.0);
    }
    const dDT = (newx, newy) => {

        var item_status = store_all[draggedTriIndex];
        var difX = newx - item_status[0][0] + chan_Dist.x;
        var difY = newy - item_status[0][1] + chan_Dist.y;
        item_status[0][0] += difX;
        item_status[0][1] += difY;
        item_status[1][0] += difX;
        item_status[1][1] += difY;
        item_status[2][0] += difX;
        item_status[2][1] += difY;
        store_all.splice(DTI, 0, item_status);
        Clear();
        store_all.forEach(function (value) {
            re_dra_Tri(value[0][0], value[0][1], value[4], value[3]);
        });
    }
    const getMousePos = (can, event) => {

        var bounds = can.getBoundingClientRect();
        return {

            x: event.clientX - bounds.left,
            y: event.clientY - bounds.top

        };
    }

    const CLD = (x1, y1, x2, y2) => {

        return Math.round(Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2)));
    }

    const Draw_Tri = (mode, x1, y1, x2, y2) => {
        var distance = CLD(x1, y1, x2, y2);
        var height = 1.414 * (distance) * mode;
        context.beginPath();
        context.moveTo(x1, y1);
        context.lineTo(x1 + distance / 2, y1 + height);
        context.lineTo(x1 - distance / 2, y1 + height);
        context.moveTo(x1, y1);
        context.fillStyle = rand_colo;
        context.fill();
        context.stroke();

        store_all.push([[x1, y1], [x1 + distance / 2, y1 + height * 1.25], [x1 - distance / 2, y1 + height * 1.25], [context.fillStyle], [distance]]);

    }

    const re_dra_Tri = (x1, y1, distance, color) => {
        var height = 1.414 * (distance);
        context.beginPath();
        context.moveTo(x1, y1);
        context.lineTo(x1 + distance / 2, y1 + height);
        context.lineTo(x1 - distance / 2, y1 + height);
        context.moveTo(x1, y1);
        context.fillStyle = color;
        context.fill();
        context.stroke();

    }

    const color_pattern_random = () => {
        var r = Math.ceil(Math.random() * 256);
        var g = Math.ceil(Math.random() * 256);
        var b = Math.ceil(Math.random() * 256);
        return 'rgb(' + r + ', ' + g + ', ' + b + ')';
    }

    const Clear = () => {
        context.clearRect(0, 0, can.width, can.height);
    }
};