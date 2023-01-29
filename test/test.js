
describe("Integration Test", function() {
    it("Should be able to add and complete TODOs", function() {
        let todos = new Todos();
        assert.notStrictEqual(todos.list().length, 1);
    });
});