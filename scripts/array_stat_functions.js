// https://gist.github.com/Daniel-Hug/7273430
var arr = {
    max: function (array) {
        return Math.max.apply(null, array);
    },

    min: function (array) {
        return Math.min.apply(null, array);
    },

    range: function (array) {
        return arr.max(array) - arr.min(array);
    },

    midrange: function (array) {
        return arr.range(array) / 2;
    },

    sum: function (array) {
        var num = 0;
        for (var i = 0, l = array.length; i < l; i++) num += array[i];
        return num;
    },

    mean: function (array) {
        return arr.sum(array) / array.length;
    },

    median: function (array) {
        array.sort(function (a, b) {
            return a - b;
        });
        var mid = array.length / 2;
        return mid % 1 ? array[mid - 0.5] : (array[mid - 1] + array[mid]) / 2;
    },

    modes: function (array) {
        if (!array.length) return [];
        var modeMap = {},
            maxCount = 0,
            modes = [];

        array.forEach(function (val) {
            if (!modeMap[val]) modeMap[val] = 1;
            else modeMap[val]++;

            if (modeMap[val] > maxCount) {
                modes = [val];
                maxCount = modeMap[val];
            } else if (modeMap[val] === maxCount) {
                modes.push(val);
                maxCount = modeMap[val];
            }
        });
        return modes;
    },

    variance: function (array) {
        var mean = arr.mean(array);
        return arr.mean(array.map(function (num) {
            return Math.pow(num - mean, 2);
        }));
    },

    standardDeviation: function (array) {
        return Math.sqrt(arr.variance(array));
    },

    meanAbsoluteDeviation: function (array) {
        var mean = arr.mean(array);
        return arr.mean(array.map(function (num) {
            return Math.abs(num - mean);
        }));
    },

    zScores: function (array) {
        var mean = arr.mean(array);
        var standardDeviation = arr.standardDeviation(array);
        return array.map(function (num) {
            return (num - mean) / standardDeviation;
        });
    },

    quartile25: function (data) {
        return Quartile(data, 0.25);
    },

    quartile75: function (data) {
        return Quartile(data, 0.75);
    },
};

function Quartile(data, q) {
    data = Array_Sort_Numbers(data);
    var pos = ((data.length) - 1) * q;
    var base = Math.floor(pos);
    var rest = pos - base;
    if ((data[base + 1] !== undefined)) {
        return data[base] + rest * (data[base + 1] - data[base]);
    } else {
        return data[base];
    }
}

function Array_Sort_Numbers(inputarray) {
    return inputarray.sort(function (a, b) {
        return a - b;
    });
}