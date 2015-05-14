Feature: Fikstury dla tabeli rainfalls

  Scenario: Lista fixtur z tabeli rainfalls
    Given I am on "rainfalls.html"
     Then I should see "Rzeszow"
      And I should see "300"
     Then I should see "Lublin"
      And I should see "640"
     Then I should see "Przemysl"
      And I should see "480"