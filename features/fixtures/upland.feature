Feature: Fikstury dla tabeli upland

  Scenario: Lista fixtur z tabeli upland
    Given I am on "upland.html"
     Then I should see "Lubelska"
      And I should see "10300"
     Then I should see "Małopolska"
      And I should see "12100"
     Then I should see "Krakowska"
      And I should see "9700"

