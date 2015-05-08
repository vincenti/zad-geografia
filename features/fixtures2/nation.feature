Feature: Fikstury dla tabeli nation

  Scenario: Lista fixtur z tabeli nation
    Given I am on "nation.html"
     Then I should see "the Chinese people"
      And I should see "1347"
     Then I should see "the Indian people"
      And I should see "1205"
     Then I should see "Americans-USA"
      And I should see "314"

