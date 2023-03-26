/**
 * @param {string[]} strs
 * @return {string}
 */
var longestCommonPrefix = function (strs) {
    let first = strs[0]
    if (!first) return "";
    let [common, str] = ["", ""]
    for (let i = 0; i < first.length; i++) {
        common += first[i]
        if (!strs.every(v => v.substr(0, i + 1) == common)) {
            return str;
        }
        str = common
    }
    return str
};

// console.log(longestCommonPrefix(["flower", "flow", "flight"]))
// console.log(longestCommonPrefix(["dog", "racecar", "car"]))
console.log('result=' + longestCommonPrefix(["", "b"]))
console.log('result=' + longestCommonPrefix(["ab", "a"]))
console.log('result=' + longestCommonPrefix(["a", "ac"]))
