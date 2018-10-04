pragma solidity ^0.4.17;

import 'zeppelin-solidity/contracts/token/ERC721/ERC721Token.sol';
import 'zeppelin-solidity/contracts/ownership/Ownable.sol';

contract KomoCoin is ERC721Token, Ownable {
  string public constant name = "KomoCoin";
  string public constant symbol = "KC";
}

struct Komo {
  Boolean shiny;
  String attribute;
  int mult;
  String rarity;
}

Komo[] komos;

function mint(shiny, attribute, mult, rarity) public onlyOwner{
  Komo memory _komo = Komo({ shiny: _shiny, attribute: _attribute, mult: _mult, rarity: _rarity });
  uint _komoId = komos.push(_komo) - 1;

  _mint(msg.sender, _komoId);
}

function getKomo( uint _komoId ) public view returns(Boolean shiny, string attribute, int mult, string rarity){
  Komo memory _kom = komos[_komoId];

  shiny = _kom.shiny;
  attribute = _kom.attribute;
  mult = _kom.mult;
  rarity = _kom.rarity;
}

describe("mint", () => {
  it("creates token with specified outer and inner colors", async () => {
    let instance = await GradientToken.deployed();
    let owner = await instance.owner();

    let token = await instance.mint("#ff00dd", "#ddddff");

    let tokens = await instance.tokensOf(owner);
    let gradients = await instance.getGradient(tokens[0]);
    assert.deepEqual(gradients, ["#ff00dd", "#ddddff"]);
  });
});
