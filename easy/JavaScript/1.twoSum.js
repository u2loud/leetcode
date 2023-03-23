/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var twoSum = function (nums, target) {
    let arr = [];
    nums.forEach((v, i) => {
        nums.filter((z, j) => {
            if (j == i) return;
            if (z + v == target) arr.push([i, j]);
        })
    })
    return arr[0] ? arr[0] : arr;
};

console.log(twoSum([2, 7, 11, 15], 9))
console.log(twoSum([3, 2, 4], 6))
console.log(twoSum([3, 3], 6))