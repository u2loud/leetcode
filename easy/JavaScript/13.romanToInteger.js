/**
 * @param {string} s
 * @return {number}
 */
var romanToInt = function (s) {
    const romanArr = {
        'I': 1,
        'V': 5,
        'X': 10,
        'L': 50,
        'C': 100,
        'D': 500,
        'M': 1000
    }
    const specialArr = {
        'IV': 4,
        'IX': 9,
        'XL': 40,
        'XC': 90,
        'CD': 400,
        'CM': 900
    }
    const arr = s.split('')
    var flag = 0;
    var sum = 0
    arr.forEach((v, i) => {
        str = v + arr[i + 1]
        if (specialArr[str]) {
            flag = 1
            sum += specialArr[str]
        } else {
            if (flag == 1) {
                return flag = 0
            } else {
                sum += romanArr[v]
            }
        }
    })
    return sum
};

console.log(romanToInt('III'))
console.log(romanToInt('IV'))
console.log(romanToInt('IX'))
console.log(romanToInt('LVIII'))
console.log(romanToInt('MCMXCIV'))
