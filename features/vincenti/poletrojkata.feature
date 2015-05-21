Feature: Obliczenia

  Scenario: pole trojkata
    Given I am on homepage
    When I follow "Pole trójkąta by vincenti"
    And I fill in "a" with "2"
    And I fill in "h" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 4"