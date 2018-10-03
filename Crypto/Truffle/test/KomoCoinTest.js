const KomoCoin = artifacts.require("KomoCoin");

contract("KomoCoin", accounts => {
  it("Should make first account an owner", async () => {
    let instance = await KomoCoin.deployed();
    let owner = await instance.owner();
    assert.equal(owner, accounts[0]);
  });
});
