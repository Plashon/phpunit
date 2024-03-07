const mathOperation = require("./calculator");

describe("Calculator tets", () => {
  test("adding 1 + 2 sould return 3", () => {
    var result = mathOperation.sum(1, 2);
    expect(result).toBe(3);
  });
});
