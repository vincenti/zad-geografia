Feature: Fikstury dla tabeli planet

  Scenario: Lista fixtur z tabeli planet
    Given I am on "planets.html"
     Then I should see "Mercury"
      And I should see "4878"
     Then I should see "Venus"
      And I should see "12104"
     Then I should see "Earth"
      And I should see "12756"