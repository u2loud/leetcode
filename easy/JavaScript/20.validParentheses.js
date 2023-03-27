/**
 * @param {string} s
 * @return {boolean}
 */
var isValid = function (s) {
    const lArr = {
        '(': ')',
        '[': ']',
        '{': '}'
    }
    const rArr = {
        ')': '(',
        ']': '[',
        '}': '{'
    }
    let i = 0;
    const arr = [];
    do {
        let char = s.slice(i, i + 1)
        if (rArr[char]) {
            let len = arr.length
            if (len == 0 || char != arr[len - 1]) {
                return false;
            } else {
                arr.pop();
            }
        } else {
            arr.push(lArr[char]);
        };
        i++;
    } while (i < s.length)
    return arr.length == 0
};

console.log('result=' + isValid('()'))
console.log('result=' + isValid('()[]{}'))
console.log('result=' + isValid('(]'))
console.log('result=' + isValid('{[()]}'))
console.log('result=' + isValid(')]}'))
console.log('result=' + isValid('[[[[[[[[[['))
